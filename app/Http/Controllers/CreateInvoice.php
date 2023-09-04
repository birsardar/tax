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
    
    public function ViewInvoice(Request $req) {
        $username = $req->session()->get('username');
        $invoices = Invoice::where('user_id', Auth::user()->id)->get();
        return view('ViewInvoice', compact('invoices'));
    }
    

    public function delete($InvoiceId){
        Invoice::find($InvoiceId)->delete();
        return redirect()->back();
        }
    public function CreateInvoiceSubmit(Request $req)
    {
        // Validate the form data
        $req->validate([
            'SalesType' => 'required',
            'InvoiceNo' => 'required',
            'name' => 'required',
            'date' => 'required|date',
            'taxValue' => 'required|numeric',
            'code' => 'required',
            'goods/service' => 'required',
            'UQC' => 'required',
            'quantity' => 'required|numeric',
            'rate' => 'required|numeric',
            'IGST' => 'required|numeric',
            'CGST' => 'required|numeric',
            'gstValue' => 'required|numeric',
            'stauts' => 'required'
        ]);

        // Retrieve the form data
        $salesType = $req->input('SalesType');
        $gstno = $req->input('gstno');
        $invoiceNo = $req->input('InvoiceNo');
        $name = $req->input('name');
        $date = $req->input('date');
        $taxValue = $req->input('taxValue');
        $code = $req->input('code');
        $goodsService = $req->input('goods/service');
        $uqc = $req->input('UQC');
        $quantity = $req->input('quantity');
        $rate = $req->input('rate');
        $igst = $req->input('IGST');
        $cgst = $req->input('CGST');
        $gstValue = $req->input('gstValue');
        $status = $req->input('status');
        $user_id = Auth::user()->id;

        // Process the form data as needed

        // For example, you can save the data to the database:
        DB::table('invoice')->insert([
            'SalesType' => $salesType,
            'GST_No' =>$gstno,
            'InvoiceNumber' => $invoiceNo,
            'PartyName' => $name,
            'InvoiceDate' => $date,
            'taxablevalue' => $taxValue,
            'HSNSAC' => $code,
            'goodservices' => $goodsService,
            'UQC' => $uqc,
            'quantity' => $quantity,
            'GstRate' => $rate,
            'IGST' => $igst,
            'CGST' => $cgst,
            'SGSTUTGST' => $gstValue,
            'user_id' => $user_id,
            'Status' => $status
        ]);

        // Redirect to a success page or any other page as needed
        return redirect()->route('add-invoice')->with('success', 'Invoice created successfully!');
    }
}
