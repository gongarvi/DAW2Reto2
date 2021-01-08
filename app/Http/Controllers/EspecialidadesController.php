<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;

use Illuminate\Http\Request;
use DB;

class EspecialidadesController extends Controller
{
    //
   // la funcion para join de las tabla "Especialidades"
    public function index(){
        return Especialidad::all();
    }
}
