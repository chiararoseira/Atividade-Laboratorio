<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneticTestsTable extends Migration
{
    public function up()
    {
        Schema::create('genetic_tests', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('exam_id')->unique();
            $table->string('exam_type');
            $table->date('collection_date');
            $table->text('report')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genetic_tests');
    }
}