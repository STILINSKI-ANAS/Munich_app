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
        //
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->string('methode');
            $table->string('status');
            $table->decimal('amount');
            $table->string('reference');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('restrict');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('paiements');
    }
};
