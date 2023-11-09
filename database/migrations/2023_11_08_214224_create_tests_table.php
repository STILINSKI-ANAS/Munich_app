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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('name');
            $table->text('overview');
            $table->text('content');
            $table->string('time');
            $table->string('price');
            $table->longText('features')->nullable(); // Assuming 'features' is a JSON field.
            $table->integer('max_placements')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
            $table->unsignedBigInteger('course_id')->default(1);
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
