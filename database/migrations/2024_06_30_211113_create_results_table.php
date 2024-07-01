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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('convocation_id')->constrained()->onDelete('cascade');
            $table->enum('ecrit', ['échoué', 'passé']);
            $table->float('note_ecrit');
            $table->enum('orale', ['échoué', 'passé']);
            $table->float('note_orale');
            $table->char('resultats', 1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
};
