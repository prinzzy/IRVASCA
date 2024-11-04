<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to users table
            $table->string('reference')->unique(); // Unique identifier for the order
            $table->string('status')->default('pending'); // Order status (e.g., pending, completed)
            $table->decimal('total_price', 20, 2); // Total price of the order
            $table->text('products'); // JSON-encoded product details
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

