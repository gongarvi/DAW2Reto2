<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class APIService extends Controller
{
    public function __construct(){

    }
    public function index(){
        $args="";
        $result = [];
        if($args==null || $args===""){
            $preguntas=Pregunta::getPreguntasAleatorias();
            foreach ($preguntas as $pregunta){
                $respuestas=Respuesta::all()->where("id","==",$pregunta["id"]);
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
        }else{
            $preguntas=Pregunta::getPreguntasAleatoriasPorEspecialidad($args);
            foreach ($preguntas as $pregunta){
                $respuestas=Respuesta::all()->where("id","==",$pregunta["id"]);
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
        if($result!=[]){
            $result = response()->json($result);
        }else{
            $result = response("No se an podido devolver datos o no existen",500);
        }
        return $result;
    }

    public function store(){}
    public function show(){}
    public function destroy(){}
}
