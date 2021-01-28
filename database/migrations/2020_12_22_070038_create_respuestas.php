<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('pregunta');
<<<<<<< HEAD
            $table->foreign('pregunta')->references('id')->on('preguntas')->onDelete('cascade'); // pregunta de la tabla de pregunta
=======
            $table->foreign('pregunta')->references('id')->on('preguntas')->onUpdate("CASCADE")->onDelete("SET NULL");
>>>>>>> c0a688efce8baba94f58c70b828bb5947d3233fc
            $table->string('respuesta');
            $table->boolean('correcta');
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
        Schema::dropIfExists('respuestas');
    }
}
