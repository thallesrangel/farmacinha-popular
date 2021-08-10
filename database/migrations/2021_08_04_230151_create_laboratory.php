<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratory extends Migration
{
    public function up()
    {
        Schema::dropIfExists('laboratory');
        Schema::create('laboratory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laboratory');
    }
}
