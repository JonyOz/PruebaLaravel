<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');
            $table->string('telefono');
            $table->string('ciudad');
            $table->string('correo');
            $table->text('mensaje');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

