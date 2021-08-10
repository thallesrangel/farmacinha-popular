<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugType extends Migration
{
    public function up()
    {
        Schema::dropIfExists('drug_type');
        Schema::create('drug_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }
    public function down()
    {
        Schema::dropIfExists('drug_type');
    }
}
