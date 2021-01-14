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
                        "nombre"=>$especialidad->nombre,
                        "color"=>$especialidad->color
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

    public function inicio()
    {
        $especialidades = Especialidad::latest()->paginate(20);
        return view('especialidades.index', compact('especialidades'))
            ->with('success', (request()->input('page', 1) - 1) * 20);     
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Color' => 'required',
        ]);

        Especialidad::create($request->all());

        return redirect()->route('inicio')
            ->with('succes','Especialidad insertada correctamente');
    }

    public function edit(Especialidad $especialidad)
    {
        return view('especialidades.edit',compact('especialidad'));

    }

    public function update(Request $request, Especialidad $especialidad)
    {
        $request->validate([
           
        ]);

        $especialidad->update($request->all());

        return redirect()->route('inicio')
            ->with('succes','Especialidad  se ha modificado correctamente');
    }
    public function show(){}
    
    public function destroy(Especialidad $especialidad)
    {
        $especialidad->delete();
        return redirect()->route('inicio')
            ->with('succes','Especialidad  eliminada correctamente');
    }
}
