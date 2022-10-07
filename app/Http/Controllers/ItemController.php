<?php

	namespace App\Http\Controllers;

	use Illuminate\View\View;

    class ItemController
	{

        public function index(): View {
            return view('item.index');
        }

	}
