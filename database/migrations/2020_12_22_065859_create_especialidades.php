<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateEspecialidades extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('especialidades', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('Nombre');
            $table->string('Color');
            $table->timestamps();
        });

   
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('especialidades');
    }
    
}
