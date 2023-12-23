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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->string('oid')->nullable();
            $table->string('status')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->date('date');
            $table->unsignedBigInteger('etudiant_id')->nullable();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('paymentable_id')->nullable();
            $table->string('paymentable_type')->nullable();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
