<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Collaborator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborator', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unity')->unsigned()->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf')->unique();
            $table->date('birth_date');
            $table->bigInteger('state_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('professional_record');
            $table->string('flag_status')->default('enabled');
            $table->timestamps();
        });

        Schema::table('collaborator', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborator');
    }
}
