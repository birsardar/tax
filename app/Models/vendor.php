<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    protected $table="vendor";
    protected $primaryKey = "VendorId";
    protected $fillable = ['VendorName', 'VendorAddress', 'GstNumber', 'PanNumber', 'Email', 'MobileNumber', 'BankName', 'IFSC', 'BankAccount'];

    public function customerUsers(){
        return $this->hasMany('App\Models\CustomerUsers', 'customer_users_id', 'customer_users_id');
    }
    
}
