<?php

    namespace App\Http\Controllers;

    use App\Models\Inventory;
    use App\Models\StockItem;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\View\View;

    class InventoryController
    {


        public function store(Request $request): JsonResponse
        {
            $val = Validator::make($request->all(), [
                'date'      => 'required',
                'operation' => 'required',
                'qty'       => 'required',
                'item_id'   => 'required'
            ]);

            if ($val->fails()) {
                return response()->json([
                    'success' => false,
                    'errmsg'  => $val->errors()
                ], 500);
            }

            $inventory = Inventory::create([
                'stock_item_id' => $request->input('item_id'),
                'operation'     => $request->input('operation'),
                'qty'           => $request->input('qty'),
            ]);

            Session::flash('alert-success', 'Record has been added.');

            return response()->json([
                'success' => true,
                'data'    => $inventory
            ]);
        }

        public function index(): View
        {
            $items = StockItem::with(['StockCategory', 'Inventory'])->paginate(5);

            return view('inventory.index')->with([
                'items'         => $items,
                'dropDownItems' => StockItem::selectItems()
            ]);
        }

    }
