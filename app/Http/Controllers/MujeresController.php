<?php

namespace App\Http\Controllers;

use App\Models\Mujer;

class MujeresController extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){

        return Mujer::with("Especialidad")->get();

        // return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
    public function mujer($id){
        return Mujer::all()->where("id","==",$id);
    }
}
