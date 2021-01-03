<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class MujeresController extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function show(){
        $mujeres=DB::table('mujeres')
        ->join('especialidades', 'especialidades.id', '=' , 'mujeres.especialidad')
        ->select('*')
        ->get();
        $especialidades=DB::table('especialidades')
        ->get();

        return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
}
