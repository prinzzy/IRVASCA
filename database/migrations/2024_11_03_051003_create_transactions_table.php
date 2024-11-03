<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();                // WinPay transaction UUID
            $table->string('ref')->index();                  // Reference for tracking invoice
            $table->string('channel');                       // Payment channel (e.g., BSI)
            $table->unsignedBigInteger('amount');            // Total transaction amount
            $table->unsignedBigInteger('fee')->default(0);   // Transaction fee
            $table->unsignedBigInteger('nett_amount');       // Amount after fee
            $table->json('products');                        // Store product details as JSON
            $table->json('customer_details');                // Store customer details as JSON
            $table->string('invoice_url');                   // URL to the invoice page
            $table->timestamps();                            // created_at for transaction time
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
