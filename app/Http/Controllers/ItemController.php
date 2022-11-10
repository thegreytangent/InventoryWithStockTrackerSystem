<?php

    namespace App\Http\Controllers;

    use App\Models\StockCategory;
    use App\Models\StockItem;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\View\View;

    class ItemController
    {

        public function index(): View
        {
            $items = StockItem::with(['StockCategory'])->paginate(10);

            return view('item.index')->with([
                'items' => $items
            ]);
        }

        public function create(): View
        {
            return view('item.create')->with([
                'categories' => StockCategory::selectList()
            ]);
        }

        public function store(Request $request): RedirectResponse
        {
            $val = Validator::make($request->all(), [
                'track_code'  => 'required',
                'item_name'   => 'required',
                'category_id' => 'required'
            ]);

            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            StockItem::create([
                'track_code'        => $request->input('track_code'),
                'stock_category_id' => $request->input('category_id'),
                'item_name'         => $request->input('item_name')
            ]);

            return redirect('item')->with('alert-success', 'New record has been added');
        }

        public function show($id): View
        {
            return view('item.edit')->with([
                'categories' => StockCategory::selectList(),
                'item'       => StockItem::find($id)
            ]);
        }

        public function update(Request $request, $id): JsonResponse|RedirectResponse
        {
            $val = Validator::make($request->all(), [
                'track_code'  => 'required',
                'item_name'   => 'required',
                'category_id' => 'required'
            ]);

            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            StockItem::find($id)->update([
                'track_code'        => $request->input('track_code'),
                'stock_category_id' => $request->input('category_id'),
                'item_name'         => $request->input('item_name')
            ]);

            return redirect('item')->with('alert-info', 'Record has been updated');
        }


        public function destroy($id): JsonResponse
        {
            $item = StockItem::find($id);

            Session::flash('alert-danger', 'Record has been deleted.');

            return response()->json([
                'success' => true,
                'result'  => $item->delete()
            ]);
        }


    }
