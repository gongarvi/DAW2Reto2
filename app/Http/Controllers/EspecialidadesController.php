<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;
use DB;

class EspecialidadesController extends Controller
{
    //
   // la funcion para join de las tablas "Mujeres" y "Especialidades"
   public function show(){
        $especialidades=Especialidad::all();
        return $especialidades;
    }
}
