<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateInvoice extends Controller
{

    public function CreateInvoice()
    {

        return view('CreateInvoice');
    }

    public function ViewInvoice(Request $req)
    {
        $username = $req->session()->get('username');
        $invoices = Invoice::where('user_id', Auth::user()->id)->get();
        // dd($invoices);
        return view('ViewInvoice', compact('invoices'));
    }


    public function delete($id)
    {
        Invoice::where('id', $id)->delete();
        return redirect()->back();
    }
    public function CreateInvoiceSubmit(Request $req)
    {
        // dd($req->all());
        // Validate the form data
        // $req->validate([
        //     'SalesType' => 'required',
        //     'InvoiceNo' => 'required',
        //     'name' => 'required',
        //     'date' => 'required|date',
        //     'taxValue' => 'required|numeric',
        //     'code' => 'required',
        //     'goods/service' => 'required',
        //     'UQC' => 'required',
        //     'quantity' => 'required|numeric',
        //     'rate' => 'required|numeric',
        //     'IGST' => 'required|numeric',
        //     'CGST' => 'required|numeric',
        //     'gstValue' => 'required|numeric',
        //     'stauts' => 'required'
        // ]);

        // Assuming the user is authenticated
        $user_id = Auth::user()->id;

        // Retrieve the customer's id
        $customer = add_customer::where('user_id', $user_id)->first();
        // dd($req->all());
        // Insert data into the 'invoice' table
        // Initialize the variables
        // dd($customer);
        // Check the value of 'status' input
        $paid = 0;
        $unpaid = 0;
        if ($req->input('status') == 'Paid') {
            $paid = $req->input('gstValue');
        } else {
            $unpaid = $req->input('gstValue');
        }
        // dd($paid, $unpaid);
        Invoice::create([
            'SalesType' => $req->input('SalesType'),
            'GST_No' => $req->input('gstno'),
            'InvoiceNumber' => $req->input('InvoiceNo'),
            'PartyName' => $req->input('name'),
            'InvoiceDate' => $req->input('date'),
            'taxablevalue' => $req->input('taxValue'),
            'HSNSAC' => $req->input('code'),
            'goodservices' => $req->input('goods/service'),
            'UQC' => $req->input('UQC'),
            'quantity' => $req->input('quantity'),
            'GstRate' => $req->input('rate'),
            'IGST' => $req->input('IGST'),
            'CGST' => $req->input('CGST'),
            'SGSTUTGST' => $req->input('gstValue'),
            'user_id' => $user_id,
            'customer_id' => $customer->id,
            'Status' => $req->input('status'),
            'paid' => $paid,
            'unpaid' => $unpaid,

        ]);

        return redirect()->route('invoice')->with('success', 'Invoice created successfully!');
    }
}
