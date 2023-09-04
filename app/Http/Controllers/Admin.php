<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
class Admin extends Controller
{
    public function customerView(Request $req){
        $data = User::where('name','<>','admin')->get();
        //$edit=edit_profile::all();
//         $data = DB::table('customer_users')
// ->select('customer_users.customer_users_id','customer_users.name','customer_users.username','customer_users.email','edit_profile.tradename','customer_users.password')
// ->join('edit_profile','edit_profile.customer_users_id','=','customer_users.customer_users_id')
// ->get();
        return view('admin-customer-page', compact('data'));
    }
     
    public function deleteCustomerAdmin($user_id){
        User::find($user_id)->delete();
        return redirect()->back();
    }
}
