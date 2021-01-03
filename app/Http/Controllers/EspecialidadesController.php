<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EspecialidadesController extends Controller
{
    //
    public function show(){
        $especialidades=DB::table('especialidades')
        ->join('mujeres', 'especialidades.id', '=' , 'mujeres.especialidad')
        ->select('*')
        ->get();

        return view('especialidades',["especialidades"=>$especialidades]);
    }
}
