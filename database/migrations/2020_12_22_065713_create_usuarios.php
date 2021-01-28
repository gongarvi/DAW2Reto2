<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->autoIncrement(); // id del usuario
            $table->string('nombre'); 
            $table->string('apellidos');
            $table->string('email')->unique();  
            $table->timestamp('email_verified_at')->nullable(); // para verificar el correo
            $table->string('password');
            $table->string('foto');
            $table->integer('progreso');
            $table->boolean('administrador')->default(0); 
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
