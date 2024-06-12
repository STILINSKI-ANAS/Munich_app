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
        Schema::table('exams', function (Blueprint $table) {
            $table->date('exam_date')->nullable();
            $table->string('exam_center')->nullable();
            $table->decimal('exam_fee', 8, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->dropColumn('exam_date');
            $table->dropColumn('exam_center');
            $table->dropColumn('exam_fee');
        });
    }
};
