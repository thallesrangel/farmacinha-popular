<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripe extends Migration
{
    public function up()
    {
        Schema::dropIfExists('stripe');
        Schema::create('stripe', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stripe');
    }
}
