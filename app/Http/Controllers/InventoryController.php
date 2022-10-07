<?php

    namespace App\Http\Controllers;

    use Illuminate\View\View;

    class InventoryController
    {

        public function index(): View
        {
            return view('inventory.index');
        }

    }
