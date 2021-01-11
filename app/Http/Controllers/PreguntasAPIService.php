<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class PreguntasAPIService extends Controller
{
    public function index(){
        $preguntas=Pregunta::getPreguntasAleatorias();
        foreach ($preguntas as $pregunta){
            $respuestas=Respuesta::all()->where("pregunta",$pregunta->id);
            $respuestasResult=[];
            foreach ($respuestas as $respuesta){
                $respuestasResult[]=$respuesta->toJsonArray();
            }
            $result[]=
                [
                    "pregunta"=>$pregunta["pregunta"],
                    "respuestas"=>$respuestasResult
                ];
        }

        if($result!=[]){
            $result = response()->json($result);
        }else{
            $result = response("No se an podido devolver datos o no existen",404);
        }
        return $result;
    }

    public function store(){}
    public function show($especialidad){
        $result=[];

        if(is_numeric($especialidad)){
            $preguntas=Pregunta::getPreguntasAleatoriasPorEspecialidad($especialidad);
            foreach ($preguntas as $pregunta){
                $respuestas=Respuesta::all()->where("pregunta",$pregunta->id);
                $respuestasResult=[];
                foreach ($respuestas as $respuesta){
                    $respuestasResult[]=$respuesta->toJsonArray();
                }
                $result[]=
                    [
                        "pregunta"=>$pregunta["pregunta"],
                        "respuestas"=>$respuestasResult
                    ];
            }
        }
        if($result!=[]||count($result)==0){
            $result = response()->json($result);
        }else{
            $result = response("No se an podido devolver datos o no existen",404);
        }
        return $result;
    }
    public function destroy(){}
}
