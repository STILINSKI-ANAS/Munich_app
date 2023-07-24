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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('tel');
            $table->text('addresse');
            $table->date('dateNaissance');
            $table->string('status')->default('en attente');
            $table->string('status_pro')->nullable();
            $table->string('Cours')->nullable();
            $table->string('langue')->nullable();
            $table->string('referral')->nullable();
            $table->string('background')->nullable();
            $table->string('time_learning')->nullable();
            $table->string('where_learning')->nullable();
            $table->string('period_learning')->nullable();
            $table->text('commentaire')->nullable();
            $table->string('Image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
