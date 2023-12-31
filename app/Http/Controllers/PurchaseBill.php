<?php

namespace App\Http\Controllers;

use App\Models\add_customer;
use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\vendor;
use App\Models\edit_profile;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseBill extends Controller
{
    public function Bill()
    {
        $purchases = Purchase::where('customer_users_id', Auth::user()->id)->get();
        // dd($purchases->p);
        $user = Auth::user()->id;
        // dd($purchases->id);

        return view('PurchaseBill', compact('purchases', 'user'));
    }
    public function PurchaseBillSubmit(Request $req)
    {

        $username = $req->session()->get('username');
        $VendorName = $req['VendorName'];
        $vendor = DB::table('customer_users')
            ->select('vendor.VendorId', 'vendor.VendorName', 'vendor.VendorAddress', 'customer_users.username', 'vendor.GstNumber', 'vendor.PanNumber', 'vendor.Email', 'vendor.MobileNumber', 'vendor.BankName', 'vendor.IFSC', 'vendor.BankAccount')
            ->join('vendor', 'customer_users.customer_users_id', '=', 'vendor.customer_users_id')
            ->where('VendorName', 'like', '%' . $VendorName . '%')->where('username', '=', $username)->get();
        return view('PurchaseBill', ['vendor' => $vendor]);

        // $VendorName=$req['VendorName'];
        // $vendor=vendor::where('VendorName','like', '%'.$VendorName.'%')->get();
        // return view('PurchaseBill',['vendor'=>$vendor]);
    }

    public function CretePurchaseBill($VendorId, Request $req)
    {
        // dd($VendorId);
        $username = $req->session()->get('username');
        $user = add_customer::where('CustomerName', $username)->get();
        $VendorDetail = vendor::where('VendorId', $VendorId)->get();

        $user_id = $user[0]->user_id;
        // dd($user_id);
        $user_profile = edit_profile::where('user_id', $user_id)->get();
        // dd($VendorDetail[0]->GstNumber);
        //echo $user_profile;
        return view('/CreatePurchaseBill', compact('user_profile', 'VendorDetail', 'user'));
    }
    public function CreatePurchaseBillSubmit(Request $req, $VendorId)
    {
        // dd($req->input('BillDate'));
        $user_id = Auth::user()->id;
        $PurchaseBill = new Purchase;
        $PurchaseBill->BillNumber = $req['BillNumber'];
        $PurchaseBill->BillDate = $req['BillDate'];
        $PurchaseBill->good = $req['goodservices'];
        $PurchaseBill->TaxableValue = $req['TaxableValue'];
        $PurchaseBill->HSNSAC = $req['Hsn/Sac'];
        $PurchaseBill->UQC = $req['UQC'];
        $PurchaseBill->quantity = $req['Quantity'];
        $PurchaseBill->GstRate = $req['GstRate'];
        $PurchaseBill->IGST = $req['Igst'];
        $PurchaseBill->CGST = $req['Cgst'];
        $PurchaseBill->SGST = $req['SGST/UTGST'];
        $PurchaseBill->Paid = $req['Paid'];
        $PurchaseBill->UnPaid = $req['UnPaid'];
        $PurchaseBill->customer_users_id  = $user_id;
        $PurchaseBill->VendorId = $VendorId;
        $PurchaseBill->save();
        return redirect()->route('purchases');
    }
    public function ViewPurchaseBill(Request $req, $customer_users_id)
    {
        $usertype = $req->session()->get('usertype');
        if ($usertype == "customer") {
            $user_id = Auth::user()->id;
            $Purchase = Purchase::where('user_id', $user_id)->get();
            return view('ViewPurchaseBill', ['Purchase' => $Purchase]);
        } else {
            // $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
            $Purchase = Purchase::where('user_id', Auth::user()->id);
            return view('ViewPurchaseBill', ['Purchase' => $Purchase]);
        }
    }
    public function delete($id)
    {
        Purchase::find($id)->delete();
        return redirect()->back();
    }

    public function ViewAdminPurchaseBill()
    {
        return view('ViewAdminPurchaseBill');
    }

    public function ViewAdminPurchaseBillSubmit(Request $req)
    {
        $CompanyName = $req['CompanyName'];
        // $Company=CustomerUsers::where('name','like', '%'.$CompanyName.'%')->get();
        $Company = DB::table('customer_users')
            ->select('customer_users.customer_users_id', 'customer_users.name', 'customer_users.username', 'customer_users.email', 'edit_profile.tradename', 'customer_users.password')
            ->join('edit_profile', 'edit_profile.customer_users_id', '=', 'customer_users.customer_users_id')->where('tradename', 'like', '%' . $CompanyName . '%')->get();

        return view('ViewAdminPurchaseBill', ['Company' => $Company]);
    }
}
