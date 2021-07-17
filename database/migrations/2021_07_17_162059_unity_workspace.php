<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnityWorkspace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unity_workspace', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unity')->unsigned()->nullable();
            $table->bigInteger('id_collaborator_request')->unsigned()->nullable();
            $table->bigInteger('id_collaborator_guest')->unsigned()->nullable();
            $table->integer('flag_deleted')->default('0');
            $table->timestamps();
        });

        Schema::table('unity_workspace', function($table) {
            $table->foreign('id_unity')->references('id')->on('unity');
            $table->foreign('id_collaborator_request')->references('id')->on('collaborator');
            $table->foreign('id_collaborator_guest')->references('id')->on('collaborator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unity_workspace');
    }
}
