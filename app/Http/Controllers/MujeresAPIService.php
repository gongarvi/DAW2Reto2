<?php

namespace App\Http\Controllers;
use App\Models\Mujer;
use Illuminate\Http\Request;

class MujeresAPIService extends Controller{
    public function index(){
        $result = response("Ruta no valida, debe enviar el id de una mujer",501);
}
public function store(){}
public function show($especialidad){
    $result=[];

    if(is_numeric($especialidad)){
        if ($especialidad == 10){
            $tablaMujer = DB::table('mujeres')->get();
        }else{
            $tablaMujer = DB::table('mujeres')->limit(3)->select('*')->where('especialidad', '=', $especialidad)->inRandomOrder()->get();
        }
        $result = $tablaMujer;
    }
    if($result!=[]||count($result)==0){
        $result = response()->json($result);
    }else{
        $result = response("No se han podido devolver datos o no existen",404);
    }
    return $result;
}
public function destroy(){
    
}
}
