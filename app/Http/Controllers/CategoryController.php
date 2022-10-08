<?php

    namespace App\Http\Controllers;

    use App\Models\StockCategory;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\View\View;

    class CategoryController extends Controller
    {

        public function index(): View
        {
            $categories = StockCategory::paginate(3);

            return view('category.index')->with([
                'categories' => $categories
            ]);
        }

        public function create(): View
        {
            return view('category.create');
        }

        public function store(Request $request): View|RedirectResponse
        {
            $val = Validator::make($request->all(), [
                'category_name' => 'required'
            ]);

            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            StockCategory::create($request->all());

            return redirect('category')->with('alert-success', 'New Record has been created.');
        }

        public function show($id): View
        {
            return view('category.edit')->with([
                'category' => StockCategory::find($id)
            ]);
        }

        public function update(Request $request, $id): RedirectResponse
        {
            $val = Validator::make($request->all(), [
                'category_name' => 'required'
            ]);

            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            StockCategory::find($id)->update($request->all());

            return redirect('category')->with('alert-info', 'Record has been updated.');
        }

        public function destroy($id) : JsonResponse {

            $category = StockCategory::find($id);

            Session::flash('alert-danger', 'Record has been deleted.');

            return response()->json([
                'success' => true,
                'result'  => $category->delete(),
            ]);
        }


    }
