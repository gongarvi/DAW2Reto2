<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;
use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class MujeresAPIService extends Controller
{
    // la funcion para join de las tablas "Mujeres" y "Especialidades"
    public function index(){

        return Mujer::with("Especialidad")->get();

        // return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
    public function show($id){
        return Mujer::all()->where("id","==",$id);
    }

    //Aqui empiezan las funciones para administrar a las mujeres desde la base de datos
    //Para mostrar a las mujeres en general
    public function inicio()
    {

        $mujeres = Mujer::join('especialidades','especialidades.id','=','mujeres.especialidad')->select('*')->paginate(20);
        return view('admin.inicio', compact('mujeres'))
            ->with('success', (request()->input('page', 1) - 1) * 20);
    }

    //Para insertar
    public function create()
    {
        $especialidades = Especialidad::get();
         return view('admin.create')->with('especialidades',$especialidades); 
       
    }

    public function insercion(Request $request)
    {

        $datos = $request->all();
        
        $file = $request->file('foto');
        $nombre = $file->getClientOriginalName();

        
        Storage::disk('public')->put($nombre, File::get($file)); 
       
        Mujer::create($datos->all());
        return redirect()->route('admin')
            ->with('success','La Mujer ha sido insertada correctamente');
                  
    }

    //Para actualizar
    public function edit(Mujer $mujer)
    {
        return view('admin.edit', compact('mujer'));
    }

    public function update(Request $request, Mujer $mujer)
    {
        $request->validate([
           
        ]);

        $mujer->update($request->all());

        return redirect()->route('admin')
            ->with('success','La Mujer  se ha modificado correctamente');
    }
        //Para borrar
    public function destroy(Mujer $mujer)
    {
        $mujer->delete();
        return redirect()->route('admin')
            ->with('success','Mujer eliminada correctamente');
    }

}
