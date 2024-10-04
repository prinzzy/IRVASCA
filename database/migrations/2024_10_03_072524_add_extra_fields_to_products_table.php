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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('original_price', 8, 2)->nullable(); // For original price
            $table->decimal('discount_price', 8, 2)->nullable(); // For discount price
            $table->decimal('star_rating', 2, 1)->default(0); // For star rating out of 5, default 0
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('original_price');
            $table->dropColumn('discount_price');
            $table->dropColumn('star_rating');
        });
    }
};
