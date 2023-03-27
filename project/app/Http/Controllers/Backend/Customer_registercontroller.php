<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class Customer_registercontroller extends Controller
{
    public function view()
    {
        return view('Backend.customer-register');
    }

    public function register(Request $request)
    {

       //Form Validation
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required | email',
                'password' => 'required | confirmed',
                'password_confirmation' => 'required',
                'image' => 'required',
                'gender' => 'required',
                'state' => 'required',
                'country' => 'required',
                'dob' => 'required',
            ]);
        //------------------

            //Insert query
            $customer = new customer;
            $customer->first_name = $request['first_name'];
            $customer->last_name = $request['last_name'];
            $customer->email = $request['email'];
            $customer->password = md5($request['password']);
            $customer->image = $request['image'];
            $customer->gender = $request['gender'];
            $customer->state = $request['state'];
            $customer->country = $request['country'];
            $customer->dob = $request['dob'];
            $customer->save();

              return redirect('/customer/view');
            // ------------------

    }

  //data fetch database to table with select query
    public function table()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('Backend.customer-view')->with($data);
    }
  //------------------------------------------------------


      // Trash Delete
    public function delete($id)
    {
    $customer = Customer::find($id);
    if(!is_null($customer))
    {
        $customer->delete();
    }
    return redirect('/customer/view');
    }
      //-----------

    // Restore ------
      public function restore($id)
    {
    $customer = Customer::withTrashed()->find($id);
    if(!is_null($customer))
    {
        $customer->restore();
    }
    return redirect('/customer/view');
    }

    //-------------

    // Permenant Delete

    public function forceDelete($id)
    {
    $customer = Customer::withTrashed()->find($id);
    if(!is_null($customer))
    {
        $customer->forcedelete();
    }
    return redirect('/customer/view');
    }

    //--------------------

       // Going To Trash
    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('Backend.customer-trash')->with($data);
    }
       //-----------------

   //Edit

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('Backend.customer-register-edit',compact('customer'));

}
//-------------------

     public function update($id, Request $request)
     {
        $customer = Customer::find($id);
        $customer->first_name = $request['first_name'];
        $customer->last_name = $request['last_name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();

          return redirect()->route('customer.table');

     }


}
