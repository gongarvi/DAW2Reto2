<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialzacionesAPIController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $result=[];
        $especialidades=Especialidad::all();
        if($especialidades!=null || count($especialidades)>0){
            foreach($especialidades as $especialidad){
                $result[]=
                    [
                        "id"=>$especialidad->id,
                        "nombre"=>$especialidad->nombre
                    ];
            }
        }
        if($result!=[]){
            $result = response()->json($result);
        }else{
            $result = response("No se an podido devolver datos o no existen",404);
        }
        return $result;
    }

    public function store(){}
    public function show(){}
    public function destroy(){}
}