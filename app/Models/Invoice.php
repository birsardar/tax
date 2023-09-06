<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoice";
    protected $primaryKey = "InvoiceId";
    protected $fillable = [
        "PartyName",
        "InvoiceNumber",
        "InvoiceDate",
        "DueDate",
        "GST_No",
        "GstNumber",
        "ClientBussinessName",
        "ClientBussinessAddress",
        "City",
        "PostalCode",
        "State",
        "Country",
        "goodservices",
        "TaxableValue",
        "Hsn/Sac",
        "Quantity",
        "UQC",
        "GstRate",
        "Igst",
        "Cgst",
        "SGST/UTGST",
        "SupplyType",
        "Paid",
        "UnPaid",
        'user_id',
        'customer_id'
    ];


    function getcustomer_users_id()
    {
        return $this->hasMany('App\Models\CustomerUsers', 'customer_users_id', 'customer_users_id');
    }
    function getCustomerId()
    {
        return $this->hasMany('App\Models\add_customer', 'CustomerId', 'CustomerId');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
