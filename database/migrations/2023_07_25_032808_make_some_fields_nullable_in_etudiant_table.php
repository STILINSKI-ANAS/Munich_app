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
        Schema::table('etudiants', function (Blueprint $table) {
            //
            $table->string('status_pro')->nullable()->change();
            $table->string('Cours')->nullable()->change();
            $table->string('langue')->nullable()->change();
            $table->string('referral')->nullable()->change();
            $table->string('background')->nullable()->change();
            $table->string('time_learning')->nullable()->change();
            $table->string('where_learning')->nullable()->change();
            $table->string('period_learning')->nullable()->change();
            $table->text('commentaire')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('etudiant', function (Blueprint $table) {
            $table->string('status_pro')->nullable(false)->change();
            $table->string('Cours')->nullable(false)->change();
            $table->string('langue')->nullable(false)->change();
            $table->string('referral')->nullable(false)->change();
            $table->string('background')->nullable(false)->change();
            $table->string('time_learning')->nullable(false)->change();
            $table->string('where_learning')->nullable(false)->change();
            $table->string('period_learning')->nullable(false)->change();
            $table->string('commentaire')->nullable(false)->change();
        });
    }
};
