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
        // Retrieve the user ID associated with the logged-in user
        $user_id = Auth::user()->id;

        // Save the new customer data to the database using the create method
        try {
            add_customer::create([
                'CustomerName' => $req->input('CustomerName'),
                'CustomerAddress' => $req->input('CustomerAddress'),
                'GstNumber' => $req->input('GstNumber'),
                'PanNumber' => $req->input('PanNumber'),
                'Email' => $req->input('Email'),
                'MobileNumber' => $req->input('MobileNumber'),
                'BankName' => $req->input('BankName'),
                'IFSC' => $req->input('IFSC'),
                'BankAccount' => $req->input('BankAccount'),
                'user_id' => $user_id,
            ]);
            return redirect()->route('CustomerView')->with('success', 'Customer added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add customer. Please try again.');
        }
    }
}
