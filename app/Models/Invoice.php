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
        'SalesType', 'GST_No', 'InvoiceNumber', 'PartyName', 'InvoiceDate', 'taxablevalue', 'HSNSAC',
        'goodservices', 'UQC', 'quantity', 'GstRate', 'IGST', 'CGST', 'SGSTUTGST', 'user_id', 'Status',
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
