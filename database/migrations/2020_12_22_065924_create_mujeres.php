<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujeres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mujeres', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nacimiento');
            $table->string('fallecimiento');
            $table->string('nacionalidad');
            $table->integer('especialidad');
            $table->foreign('especialidad')->references('id')->on('especialidades');
            $table->string('foto');
            $table->text('descripcion');
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
        Schema::dropIfExists('mujeres');
    }
}
