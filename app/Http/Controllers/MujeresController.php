<?php

namespace App\Http\Controllers;

use App\Models\Mujer;
use Illuminate\Http\Request;

use DB;

class MujeresController extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){

        return Mujer::all();

        // return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
    public function mujer($id){
        return Mujer::all()->where("id","==",$id);
    }
}
