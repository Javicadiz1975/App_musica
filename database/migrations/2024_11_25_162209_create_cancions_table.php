<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionsTable extends Migration
{
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('grupo');
            $table->string('estilo');
            $table->integer('puntuacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cancions');
    }
}
