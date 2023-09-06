<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerUsers;
use App\Models\edit_profile;

class Admin extends Controller
{
    public function customerView(Request $req)
    {
        $data = User::where('user_type', 'customer')->get();
        //$edit=edit_profile::all();
        //         $data = DB::table('customer_users')
        // ->select('customer_users.customer_users_id','customer_users.name','customer_users.username','customer_users.email','edit_profile.tradename','customer_users.password')
        // ->join('edit_profile','edit_profile.customer_users_id','=','customer_users.customer_users_id')
        // ->get();
        $customer = Vendor::where('customer_users_id', Auth::user()->id)->get();
        // dd($vendoer);
        return view('admin-customer-page', compact('data', 'customer'));
    }
    public function customerUserView(Request $req)
    {
        $data = User::where('user_type', 'customer')->get();
        //$edit=edit_profile::all();
        //         $data = DB::table('customer_users')
        // ->select('customer_users.customer_users_id','customer_users.name','customer_users.username','customer_users.email','edit_profile.tradename','customer_users.password')
        // ->join('edit_profile','edit_profile.customer_users_id','=','customer_users.customer_users_id')
        // ->get();
        $customer = Vendor::where('customer_users_id', Auth::user()->id)->get();
        // dd($vendoer);
        return view('CustomerUserView', compact('data', 'customer'));
    }

    public function deleteCustomerAdmin($id)
    {
        // dd($id);
        Vendor::find($id)->delete();
        return redirect()->route('companies');
    }
    public function deleteCustomerUser($id)
    {
        // dd($id);
        User::find($id)->delete();
        return view('CustomerUserView');
    }
}
