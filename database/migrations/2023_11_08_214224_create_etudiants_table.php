<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->text('addresse')->nullable();
            $table->date('dateNaissance')->nullable();
            $table->string('lieuNaissance')->nullable();
            $table->string('langueMaternelle')->nullable();
            $table->string('sexe')->nullable();
            $table->string('paysNaissance')->nullable();
            $table->string('villeResidence')->nullable();
            $table->string('paysResidence')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('status_1')->default('en attente');
            $table->string('status_2')->default('en attente');
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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
