<?php

namespace App\Http\Controllers;

use App\Models\Mujer;

class MujeresAPIService extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){
        return Mujer::with("Especialidad")->get();
    }

    public function show($cantidad, $especializacion){
        $result=[];
        if($cantidad!=null && $cantidad!=0 && $especializacion!=null){
            if($especializacion!=0){
                $mujeres=Mujer::getMujeresPorEspecializacion($especializacion);
            }else{
                $mujeres=Mujer::all();
            }
            $result=$mujeres->random($cantidad);

        }
        if($result!=[]||count($result)==0){
            $result = response()->json($result);
        }else{
            $result = response("No se han podido devolver datos o no existen",404);
        }
        return $result;
    }
}
