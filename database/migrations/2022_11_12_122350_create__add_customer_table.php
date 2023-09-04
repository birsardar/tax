<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_customer', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->string('CustomerAddress');
            $table->string('GstNumber');
            $table->string('PanNumber');
            $table->string('Email');
            $table->string('MobileNumber');
            $table->string('BankName');
            $table->string('IFSC');
            $table->string('BankAccount');
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
        Schema::dropIfExists('_add_customer');
    }
}
