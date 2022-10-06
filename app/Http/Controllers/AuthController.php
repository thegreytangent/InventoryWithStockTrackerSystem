<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller
    {
        public function logout(): RedirectResponse
        {
            Auth::logout();
            return redirect('/login');
        }


        public function login(Request $request) {
            return $request->all();
        }


    }
