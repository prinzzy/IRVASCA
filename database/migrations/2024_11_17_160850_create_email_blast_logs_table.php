<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('email_blast_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_blast_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->enum('status', ['attempt', 'success', 'failed']);
            $table->text('error_message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_blast_logs');
    }
};
