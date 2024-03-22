<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('my_selves', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('myself')->nullable();
            $table->string('profile')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_selves');
    }
};
