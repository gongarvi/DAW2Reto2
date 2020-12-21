<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuario'); // id del usuario
            $table->string('nombre'); 
            $table->string('apellidos');
            $table->string('email')->unique();  
            $table->timestamp('email_verified_at')->nullable(); // para verificar el correo
            $table->string('password');
            $table->string('foto_perfil');
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
        Schema::dropIfExists('users');
    }
}
