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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('discount_code')->collation('utf8mb4_unicode_ci')->change();
        });

        Schema::table('discounts', function (Blueprint $table) {
            $table->string('code')->collation('utf8mb4_unicode_ci')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('discount_code')->collation('utf8mb4_general_ci')->change();
        });

        Schema::table('discounts', function (Blueprint $table) {
            $table->string('code')->collation('utf8mb4_general_ci')->change();
        });
    }
};
