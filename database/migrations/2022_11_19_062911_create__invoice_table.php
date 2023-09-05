<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('SalesType');
            $table->string('GST_No'); // Make sure this matches the column name in your database
            $table->string('InvoiceNumber');
            $table->string('PartyName');
            $table->date('InvoiceDate');
            $table->decimal('taxablevalue', 10, 2);
            $table->string('HSNSAC');
            $table->string('goodservices');
            $table->string('UQC');
            $table->decimal('quantity', 10, 2);
            $table->decimal('GstRate', 5, 2);
            $table->decimal('IGST', 10, 2);
            $table->decimal('CGST', 10, 2);
            $table->date('DueDate')->nullable();
            $table->string('ClientBusinessAddress')->nullable();
            $table->string('ClientAddress')->nullable();
            $table->string('ClientState')->nullable();
            $table->string('ClientPostsl')->nullable();
            $table->string('ClientCity')->nullable();
            $table->string('ClientCountry')->nullable();
            $table->string('SupplyType')->nullable();
            $table->decimal('SGSTUTGST', 10, 2);
            $table->string('Status');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('add_customer');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('_invoice');
    }
}
