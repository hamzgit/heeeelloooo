<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class Admincontroller extends Controller
{
    public function Adminview(Request $request)
    {
        // $search = $request['search'] ?? "";
        // if($search != "") {

        // }
        return view('Backend.Admin-register');
    }

    public function Adminregister(Request $request)
    {
    // ---- form validation
        $request->validate(
        [
             'first_name' => 'required',
             'last_name' => 'required',
             'email' => 'required | email',
             'password' => 'required | confirmed',
             'password_confirmation' => 'required',
             'image' => 'required',
             'gender'=> 'required',
             'state' => 'required',
             'country' => 'required',
             'dob' => 'required',

        ]);

    //----------------

    // ---- Insert query
        $admin = new admin;
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->password = md5($request['password']);
        $admin->image = $request['image'];
        $admin->gender = $request['gender'];
        $admin->state = $request['state'];
        $admin->country = $request['country'];
        $admin->dob = $request['dob'];
        $admin->save();

        return redirect('/admin/view');
    }
    //---------------------

    // ---- Admin Table
      public function Admintable()
      {
        $admin = Admin::all();
        $data = compact('admin');
        return view('Backend.Admin-view')->with($data);
      }
    //------------------

    // ---- Edit Admin
      public function edit($id)
      {
        $admin = Admin::find($id);
        return view('Backend.admin_edit',compact('admin'));

      }
    //-------------------

    // ---- Update Admin
    public function update($id, Request $request)
    {
        $admin = Admin::find($id);
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->gender = $request['gender'];
        $admin->state = $request['state'];
        $admin->country = $request['country'];
        $admin->dob = $request['dob'];
        $admin->save();

          return redirect('/admin/view');


    }
    // ------------------

    // ---- Admin Auth Form login
    public function login() {
        return view('Backend.admin_login.login');
    }

    // ---- Form store
    public function makelogin(Request $request) {
        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($data)) {

            return redirect()->route('dashboard');
        } else {

            return back()->withErrors(['message' => 'Invalid Email | Password']);
        }
    }
    // ---- Form Logout
    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    // ---- Form signup
    public function forgot() {
        return view('Backend.admin_login.forgot_password');
    }
    // -----------------------

}
