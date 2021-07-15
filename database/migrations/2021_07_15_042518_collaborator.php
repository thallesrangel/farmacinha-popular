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
            $table->bigInteger('id_unity')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf')->unique();
            $table->string('states');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('professional_record');
            $table->integer('flag_deleted')->default('0');
            $table->timestamps();
        });

        Schema::table('collaborator', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
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
