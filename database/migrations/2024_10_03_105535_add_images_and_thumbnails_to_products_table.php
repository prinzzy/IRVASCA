<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesAndThumbnailsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->json('images')->nullable(); // For storing multiple images
            $table->json('thumbnails')->nullable(); // For storing thumbnails
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('images');
            $table->dropColumn('thumbnails');
        });
    }
}
