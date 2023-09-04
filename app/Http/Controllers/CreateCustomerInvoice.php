<?php

namespace App\Http\Controllers;

use App\Models\add_customer;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCustomerInvoice extends Controller
{
    public function CreateCustomerInvoices($id, Request $req)
    {
        // Assuming you want to retrieve the authenticated user's data
        // Retrieve data from the add_customer table based on the provided $id
        $CustomerDetail = add_customer::get()->where('id', $id);

        // dd($CustomerDetail);
        // Retrieve the authenticated user's profile data based on their user_id
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $user_profile = edit_profile::where('user_id', $user_id)->first();
        // Find the index of the item where id matches the user's id
        // Iterate through the collection to find the index

        foreach ($CustomerDetail as $key => $item) {
            if ((int)$item->id == $id) {
                $index = $key;
                break; // Exit the loop once found
            }
        }
        // dd($index);




        return view('/CreateCustomerInvoice', compact('CustomerDetail', 'user', 'user_profile', 'index'));
    }
    public function CreateCustomerInvoicesSubmit(Request $req, $CustomerId)
    {
        $user_id = Auth::user()->id;
        $Invoice = new Invoice;
        $Invoice->InvoiceNumber = $req['InvoiceNumber'];
        $Invoice->InvoiceDate = $req['InvoiceDate'];
        $Invoice->DueDate = $req['DueDate'];
        $Invoice->ClientBusinessAddress = $req['ClientBussinessName'];
        $Invoice->ClientAddress = $req['ClientBussinessAddress'];
        $Invoice->ClientCity = $req['City'];
        $Invoice->ClientPostsl = $req['PostalCode'];
        $Invoice->ClientState = $req['State'];
        $Invoice->Country = $req['Country'];
        $Invoice->goodservices = $req['goodservices'];
        $Invoice->TaxableValue = $req['TaxableValue'];
        $Invoice->HSNSAC = $req['Hsn/Sac'];
        $Invoice->UQC = $req['UQC'];
        $Invoice->quantity = $req['Quantity'];
        $Invoice->GstRate = $req['GstRate'];
        $Invoice->IGST = $req['Igst'];
        $Invoice->CGST = $req['Cgst'];
        $Invoice->SGSTUTGST = $req['SGST/UTGST'];
        $Invoice->SupplyType = $req['SupplyType'];
        $Invoice->paid = $req['Paid'];
        $Invoice->Unpaid = $req['UnPaid'];
        $Invoice->user_id = $user_id;
        $Invoice->CustomerId = $CustomerId;
        $Invoice->save();
        return redirect()->back();
    }

    public function ViewAdminInvoice()
    {
        return view('ViewAdminInvoice');
    }
    public function ViewAdminInvoiceSubmit(Request $req)
    {
        $CompanyName = $req['CompanyName'];
        // $Company=CustomerUsers::where('name','like', '%'.$CompanyName.'%')->get();
        $Company = DB::table('customer_users')
            ->select('customer_users.user_id', 'customer_users.name', 'customer_users.username', 'customer_users.email', 'edit_profile.tradename', 'customer_users.password')
            ->join('edit_profile', 'edit_profile.user_id', '=', 'customer_users.user_id')->where('tradename', 'like', '%' . $CompanyName . '%')->get();

        return view('ViewAdminInvoice', ['Company' => $Company]);
    }

    public function ViewInvoice(Request $req, $customer_users_id)
    {
        $usertype = $req->session()->get('usertype');
        if ($usertype == "customer") {
            $Invoice = invoice::where('user_id', Auth::user()->id)->get();
            return view('ViewInvoice', ['Invoice' => $Invoice]);
        } else {
            // $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
            $Invoice = invoice::where('user_id', $customer_users_id)->get();
            return view('ViewInvoice', ['Invoice' => $Invoice]);
        }
    }

    public function delete($InvoiceId)
    {
        Invoice::find($InvoiceId)->delete();
        return redirect()->back();
    }
}
