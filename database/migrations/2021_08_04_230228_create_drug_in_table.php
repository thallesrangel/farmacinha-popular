<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugInTable extends Migration
{
    public function up()
    {
        Schema::create('drug_in', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unity')->unsigned();
            $table->bigInteger('id_collaborator')->unsigned();
            $table->bigInteger('id_people_donator')->unsigned();
            $table->bigInteger('id_laboratory')->unsigned();
            $table->bigInteger('id_stripe')->unsigned();
            $table->string('name');
            $table->bigInteger('id_measurement')->unsigned();
            $table->double('amount', 10, 2);
            $table->timestamps();
        });

        Schema::table('drug_in', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('id_collaborator')->references('id')->on('collaborator');
            $table->foreign('id_people_donator')->references('id')->on('people');
            $table->foreign('id_laboratory')->references('id')->on('laboratory');
            $table->foreign('id_stripe')->references('id')->on('stripe');
            $table->foreign('id_measurement')->references('id')->on('measurement');
        });
    }

    public function down()
    {
        Schema::dropIfExists('drug_in');
    }
}
