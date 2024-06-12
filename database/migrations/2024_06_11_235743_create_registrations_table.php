<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_registrations_table.php
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('email');
            $table->string('birth_place');
            $table->string('birth_country');
            $table->string('modules');
            $table->string('photo_path');
            $table->string('cin_path');
            $table->boolean('email_verified')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
