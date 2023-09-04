<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AddCustomer extends Controller
{
    public function AddCustomer()
    {
        return view('add-customer');
    }

    public function AddCustomerSubmit(Request $req)
    {
        // Create a new instance of the 'add_customer' model and set its properties
        $AddCustomer = new add_customer;
        $AddCustomer->CustomerName = $req->input('CustomerName');
        $AddCustomer->CustomerAddress = $req->input('CustomerAddress');
        $AddCustomer->GstNumber = $req->input('GstNumber');
        $AddCustomer->PanNumber = $req->input('PanNumber');
        $AddCustomer->Email = $req->input('Email');
        $AddCustomer->MobileNumber = $req->input('MobileNumber');
        $AddCustomer->BankName = $req->input('BankName');
        $AddCustomer->IFSC = $req->input('IFSC');
        $AddCustomer->BankAccount = $req->input('BankAccount');
        // Set other properties based on the form data

        // Retrieve the user ID associated with the logged-in user
        $username = $req->session()->get('username');
        $user_id = Auth::user()->id;

        // Set the 'customer_users_id' property of the 'add_customer' model
        $AddCustomer->user_id = $user_id;

        // Save the new customer data to the database
        try {
            $AddCustomer->save();
            return redirect()->back()->with('success', 'Customer added successfully.');
        } catch (\Exception $e) {;
            return redirect()->back()->with('error', 'Failed to add customer. Please try again.');
        }
    }
}
