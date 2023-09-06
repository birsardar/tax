<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_bill', function (Blueprint $table) {
            $table->id('PurchaseId')->nullable();
            $table->string('BillNumber')->nullable();
            $table->date('BillDate')->nullable();
            $table->string('good')->nullable();
            $table->decimal('taxablevalue')->nullable();
            $table->decimal('HSNSAC')->nullable();
            $table->string('quantity')->nullable();
            $table->string('UQC')->nullable();
            $table->string('GstRate')->nullable();
            $table->string('IGST')->nullable();
            $table->string('CGST')->nullable();
            $table->string('SGST')->nullable();
            $table->decimal('Paid')->nullable();
            $table->decimal('UnPaid')->nullable();
            $table->unsignedBigInteger('customer_users_id');
            $table->foreign('customer_users_id')->references('id')->on('add_customer')->onDelete('cascade');;
            $table->unsignedBigInteger('VendorId');
            $table->foreign('VendorId')->references('VendorId')->on('vendor')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_bill');
    }
}
