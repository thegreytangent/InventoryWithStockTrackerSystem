<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;

    class AuthController extends Controller
    {

        public function logout(): RedirectResponse
        {
            Auth::logout();
            return redirect('/login');
        }


        public function login(Request $request) : RedirectResponse
        {
            $val = Validator::make($request->all(), [
                'username' => 'required|exists:users,username',
                'password' => 'required'
            ]);

            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            $password = $request->input('password');

            $user = User::where('username', $request->input('username'))->first();

            if (!Hash::check($password, $user->password)) {
                return redirect('login')->with('alert-danger', 'Wrong password. Please try again');
            }

            Auth::login($user);

            return redirect('dashboard');

        }


    }
