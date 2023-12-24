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
        Schema::create('etudiant_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('paiement_id')->nullable();
            $table->string('type')->nullable();
            $table->foreign('etudiant_id')->references('id')->on('etudiants');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('paiement_id')->references('id')->on('paiements');
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
