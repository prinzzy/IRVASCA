<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links address to a specific user
            $table->string('address_line1');        // Primary address line
            $table->string('address_line2')->nullable(); // Secondary address line (optional)
            $table->string('city');                 // City
            $table->string('state');                // State or region
            $table->string('postal_code');          // Postal or ZIP code
            $table->string('country');              // Country name
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
        Schema::dropIfExists('addresses');
    }
}
