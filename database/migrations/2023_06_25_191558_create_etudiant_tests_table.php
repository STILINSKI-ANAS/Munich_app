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
        Schema::create('etudiant_tests', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('test_id');

            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('restrict');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_tests');
    }
};
