<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWomens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('womens', function (Blueprint $table) {
            $table->id('id_mujer');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('nacimiento');
            $table->date('fallecimiento');
            $table->string('especialidad');
            $table->string('foto');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('womens');
    }
}
