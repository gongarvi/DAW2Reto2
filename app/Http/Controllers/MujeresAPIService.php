<?php

namespace App\Http\Controllers;

use App\Models\Mujer;

class MujeresAPIService extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){

        $array=Mujer::with("especialidades")->get();
        $result=[];
        foreach ($array as $item){
            $especialidad=array(
                "nombre"=>$item["especialidades"]["nombre"],
                "color"=>$item["especialidades"]["color"]
            );
            $mujer=array(
                "nombre"=>$item["nombre"],
                "apellidos"=>$item["apellidos"],
                "nacionalidad"=>$item["nacionalidad"],
                "nacimiento"=>$item["nacimiento"],
                "fallecido"=>$item["fallecido"],
                "especialidad"=>$especialidad,
                "foto"=>$item["foto"],
                "descripcion"=>$item["descripcion"]
            );
            $result[]=$mujer;
        }
        return response()->json($result);
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
