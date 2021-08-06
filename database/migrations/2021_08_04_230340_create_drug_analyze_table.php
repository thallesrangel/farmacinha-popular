<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugAnalyzeTable extends Migration
{
    public function up()
    {
        Schema::create('drug_analyze', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unity')->unsigned();
            $table->bigInteger('id_collaborator')->unsigned();
            $table->string('analyze_conservation');
            $table->string('analyze_result');
            $table->timestamps();
        });

        Schema::table('drug_analyze', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('id_collaborator')->references('id')->on('collaborator');
        });
    }

    public function down()
    {
        Schema::dropIfExists('drug_analyze');
    }
}
