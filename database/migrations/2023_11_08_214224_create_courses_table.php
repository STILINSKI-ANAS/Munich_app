<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->text('overview');
            $table->text('content');
            $table->string('time');
            $table->string('image')->nullable();
            $table->string('price');
            $table->unsignedBigInteger('language_id');
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('languages');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
