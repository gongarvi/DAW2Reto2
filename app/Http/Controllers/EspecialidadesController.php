<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EspecialidadesController extends Controller
{
    //
   // la funcion para join de las tablas "Mujeres" y "Especialidades"
   public function show(){
        $especialidades=DB::table('especialidades')
        ->get();
        return $especialidades;
    }
}
