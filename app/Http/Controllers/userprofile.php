<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
use Illuminate\Support\Facades\Auth;
class userprofile extends Controller
{
    
    public function profile(Request $req){
        $user=User::where('id',Auth::user()->id)->first();
        $user_profile=edit_profile::where('user_id',Auth::user()->id)->first();
        // echo "<pre>";
        // print_r($user_profile);
        return view('profile',compact('user','user_profile'));
    }
}
