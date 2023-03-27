<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function userLogin()
    {
        return view('Frontend.user_login');
    }

     // user login check
     public function loginCheck(Request $request) {
        $data = array(
            'email' => $request->email,
            'password' => $request->password

        );

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {

            return back()->withErrors(['message' => 'invalid email or password']);
        }
    }
    // ----------------

    // ---- user store
    public function userStore(Request $request)
    {
        $data = array(
            'name' => $request->fname . ' ' . $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );

        $user = User::create($data);
        return redirect()->route('user.login');


    }
    // ---------------

    // user logout ----
    public function user_logout() {
        Auth::logout();
        return redirect()->route('user.login');
    }
    // ----------------

    // Admin user listing -------
    public function adminUser() {

        $users = User::get();
        return view('Backend.users.users', compact('users'));

    }
    // --------------------------

    // Admin user delete ----
    public function delete(Request $request) {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
    }
    // ----------------------

}
