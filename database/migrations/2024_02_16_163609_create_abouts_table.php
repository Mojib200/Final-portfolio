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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_profile')->nullable();
            $table->string('exam_name1')->nullable();
            $table->string('exam_name2')->nullable();
            $table->string('exam_name3')->nullable();
            $table->integer('exam_year1')->nullable();
            $table->integer('exam_year2')->nullable();
            $table->integer('exam_year3')->nullable();
            $table->integer('progressbar1')->nullable();
            $table->integer('progressbar2')->nullable();
            $table->integer('progressbar3')->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
