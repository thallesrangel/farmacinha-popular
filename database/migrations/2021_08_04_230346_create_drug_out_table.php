<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugOutTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('drug_out');
        Schema::create('drug_out', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_drug_in')->unsigned();
            $table->bigInteger('id_unity')->unsigned();
            $table->bigInteger('id_collaborator')->unsigned();
            $table->bigInteger('id_people_receiver')->unsigned();
            $table->double('quantity_out', 10, 2);
            $table->timestamps();
        });

        Schema::table('drug_out', function($table) {
            $table->foreign('id_drug_in')->references('id')->on('drug_in');
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('id_collaborator')->references('id')->on('collaborator');
            $table->foreign('id_people_receiver')->references('id')->on('people');   
        });
    }

    public function down()
    {
        Schema::dropIfExists('drug_out');
    }
}
