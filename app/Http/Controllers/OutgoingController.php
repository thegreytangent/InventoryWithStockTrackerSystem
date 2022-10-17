<?php

    namespace App\Http\Controllers;

    use App\Models\Inventory;
    use App\Models\StockItem;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\View\View;

    class OutgoingController extends Controller
    {
        public function index(): View
        {

            $item_id = request()->input('item-id');

            $outgoing = Inventory::where([
                'stock_item_id' => $item_id,
                'operation'     => 'out'
            ])->paginate(10);

            $item = StockItem::find($item_id);

            return view('Outgoing.index')->with([
                'outgoing' => $outgoing,
                'item'     => $item
            ]);

        }


        public function destroy($id) {
            $item = Inventory::find($id);

            Session::flash('alert-danger', 'Record has been deleted.');

            return response()->json([
                'success' => true,
                'result'  => $item->delete()
            ]);

        }





    }
