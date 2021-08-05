<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurement extends Migration
{
    public function up()
    {
        Schema::create('measurement', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbreviation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('measurement');
    }
}
