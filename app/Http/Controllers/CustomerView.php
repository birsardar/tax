<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use App\Models\edit_profile;
use Illuminate\Support\Facades\Auth;

class CustomerView extends Controller
{
    public function CustomerViewData(Request $req)
    {

        $username = $req->session()->get('username');
        $customer = add_customer::where('user_id', Auth::user()->id)->get();
        // dd($customer);
        return view('/CustomerView', compact('customer'));
    }
    public function delete($CustomerId)
    {
        add_customer::find($CustomerId)->delete();
        return redirect()->back();
    }

    public function AdminCustomerViewData($CustomerId)
    {
        $customer = add_customer::where('user_id', $CustomerId)->get();
        return view('/CustomerView', ["customer" => $customer]);
    }

    public function adminCustomerView($customer_users_id)
    {
        $customer = add_customer::where('user_id', $customer_users_id)->get();
        return view('/CustomerView', compact('customer'));
    }
}
