<?php

namespace App\Http\Controllers;

use App\Models\Mujer;

class MujeresAPIService extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){

        return Mujer::with("Especialidad")->get();

        // return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
    public function show($id){
        return Mujer::all()->where("id","==",$id);
    }
}
