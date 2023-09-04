<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendor;
use App\Models\CustomerUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Vendors extends Controller
{
    public function AddVendors()
    {
        return view('AddVendor');
    }

    public function AddVendorSubmit(Request $req)
    { 
        try {
            $vendor = new Vendor;
            $vendor->VendorName = $req->input('name');
            $vendor->VendorAddress = $req->input('address');
            $vendor->GstNumber = $req->input('gst');
            $vendor->PanNumber = $req->input('pan');
            $vendor->Email = $req->input('email');
            $vendor->MobileNumber = $req->input('phone');
            $vendor->BankName = $req->input('BankName');
            $vendor->IFSC = $req->input('IFSC');
            $vendor->BankAccount = $req->input('BankAccount');
    
            $user_id = Auth::user()->id;
    
            $vendor->user_id = $user_id;
            $vendor->save();
    
            // Successful form submission, redirect to success page
            return redirect()->with('success');
        } catch (\Exception $e) { 
            // Error occurred, redirect back to the form with an error message
            return redirect()->back()->withInput()->with('error_message', 'Error adding vendor. Please try again later.');
        }
    }
    

    public function ViewVendor(Request $req)
    {
        
        $vendor = Vendor::where('user_id', Auth::user()->id)->get();
        return view('/ViewVendor', compact('vendor'));
    }
    public function delete($id)
    {
        vendor::where('VendorId', $id)->delete();
        return redirect()->back();
    }

    public function edit($VendorId)
    {
       $VendorDetail = Vendor::find($VendorId);
       return view('/EditVendor', compact('VendorDetail'));
    }

    public function EditVendor($id, Request $req)
    {
        vendor::where('VendorId', $id)->update([
            "VendorName" => $req['VendorName'],
            "VendorAddress" => $req['VendorAddress'],
            "PanNumber" => $req['pan'],
            "Email" => $req['email'],
            "MobileNumber" => $req['phone'],
            "BankName" => $req['BankName'],
            "IFSC" => $req['IFSC'],
            "BankAccount" => $req['BankAccount']

        ]);
        return redirect()->back();
    }

    public function adminViewVendor($CustomerId){
        $vendor=vendor::where('user_id',$CustomerId)->get();
        return view('/ViewVendor',compact('vendor'));
    }
}
