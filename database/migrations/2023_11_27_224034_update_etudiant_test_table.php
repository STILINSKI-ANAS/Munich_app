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
        Schema::table('etudiant_tests', function (Blueprint $table) {
            $table->foreignId('paiement_id')->nullable()->constrained('paiements')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('etudiant_tests', function (Blueprint $table) {
            $table->dropForeign(['paiement_id']);
            $table->dropColumn('paiement_id');
        });
    }
};
