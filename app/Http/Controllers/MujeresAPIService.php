<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;
use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class MujeresAPIService extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){
<<<<<<< HEAD
        return Mujer::with("Especialidad")->get();
=======
        try{
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
        catch(Exception $e){

        }
>>>>>>> c0ca664fd53bf123d465304b4fab8f9d8b03e8ac
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

    //Aqui empiezan las funciones para administrar a las mujeres desde la base de datos
    //Para mostrar a las mujeres en general



}
