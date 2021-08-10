<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('people');
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unity')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('social_name')->nullable();
            $table->string('sex');
            $table->date('birth_date');
            $table->string('cpf')->unique();
            $table->string('sus')->unique()->nullable();
            $table->bigInteger('state_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->string('district')->nullable();
            $table->string('address_place')->nullable();
            $table->string('complement')->nullable();
            $table->string('number')->nullable();
            $table->string('flag_status')->default('enabled');
            $table->timestamps();
        });

        Schema::table('people', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('city');
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
}
