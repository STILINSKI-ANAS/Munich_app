<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('short_description');
        });
    }
};
