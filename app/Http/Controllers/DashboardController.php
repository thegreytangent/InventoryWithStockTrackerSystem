<?php

    namespace App\Http\Controllers;

    use App\Models\StockItem;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\View\View;

    class DashboardController extends Controller
    {


        public function index()
        {

            $noOfCategories = DB::table('stock_categories')->count();
            $noOfItems = DB::table('stock_items')->count();
            $noOfUsers = 4;

            $data = [];
            $category = [];

            foreach (StockItem::all() as $item) {
                $data[] = $item->getBalance();
                $category[] = $item->item_name;
            }

            return view('dashboard.index')->with([
                'number_of_categories' => $noOfCategories,
                'number_of_items'      => $noOfItems,
                'number_of_users'      => $noOfUsers,
                'chart'                => [
                    'data'       => $data,
                    'categories' => $category
                ]
            ]);
        }
    }
