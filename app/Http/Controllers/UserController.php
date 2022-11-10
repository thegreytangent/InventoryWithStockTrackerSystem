<?php

    namespace App\Http\Controllers;

    use App\Models\StockCategory;
    use App\Models\User;
    use App\Models\UserInfo;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\View\View;

    class UserController extends Controller
    {
        public function index(): View
        {
            return view('user.index')->with([
                'users' => User::paginate(10)
            ]);
        }


        public function create(): View
        {
            return view('user.create');
        }

        public function store(Request $request)
        {
            $val = Validator::make($request->all(), [
                'username'  => 'required',
                'password'  => 'required',
                'firstname' => 'required',
                'lastname'  => 'required',
                'role'      => 'required',
            ]);


            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            $user = User::create([
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'role'     => $request->input('role'),
            ]);

            UserInfo::create([
                'user_id'   => $user->id,
                'firstname' => $request->input('firstname'),
                'lastname'  => $request->input('lastname'),
            ]);


            return redirect('users')->with('alert-success', 'New user has been added.');
        }

        public function show($id): View
        {
            $user = User::with('UserInfo')->where('id', $id)->first();

            return view('user.edit')->with([
                'user' => $user
            ]);
        }

        public function update(Request $request, $id)
        {
            $val = Validator::make($request->all(), [
                'username'  => 'required',
                'password'  => 'sometimes',
                'firstname' => 'required',
                'lastname'  => 'required',
                'role'      => 'required',
            ]);


            if ($val->fails()) {
                return back()->withErrors($val)->withInput();
            }

            $user = User::find($id)->update([
                'username' => $request->input('username'),
                'role'     => $request->input('role'),
            ]);

            if ($request->input('password')) {

                $user = User::find($id)->update([
                    'password' => Hash::make($request->input('password'))
                ]);

            }


            UserInfo::where('user_id', $id)->delete();
            UserInfo::create([
                'user_id'   => $id,
                'firstname' => $request->input('firstname'),
                'lastname'  => $request->input('lastname'),
            ]);


            return redirect('users')->with('alert-success', 'New user has been added.');
        }


        public function destroy($id): JsonResponse {
            $user = User::find($id);

            Session::flash('alert-danger', 'User has been deleted.');

            return response()->json([
                'success' => true,
                'result'  => $user->delete(),
            ]);
        }

    }
