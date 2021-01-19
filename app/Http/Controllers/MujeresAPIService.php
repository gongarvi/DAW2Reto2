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
        return view('adminMujeres.inicio', compact('mujeres'))
            ->with('success', (request()->input('page', 1) - 1) * 20);
    }

    //Para insertar
    public function create()
    {
        $especialidades = Especialidad::get();
         return view('adminMujeres.createM')->with('especialidades',$especialidades); 
       
    }

    public function insercion(Request $request)
    {

        $request->all();
       
       if($request->hasFile('foto')){
           $archivo = $request->file('foto');
           $nombre = $request->file('foto');
           Storage::disk('public')->put($nombre, File::get($archivo)); 
       }
        
        Mujer::create($request->all());
        return redirect()->route('admin')
            ->with('success','La Mujer ha sido insertada correctamente');
                  
    }

    //Para actualizar
    public function editarMujer(Mujer $mujer)
    {
        return view('adminMujeres.editM', compact('mujer'));
    }

    public function actualizarMujer(Request $request, Mujer $mujer)
    {
        $request->validate([
           
        ]);

        $mujer->update($request->all());

        return redirect()->route('admin')
            ->with('success','La Mujer  se ha modificado correctamente');
    }
        //Para borrar
    public function eliminarMujer(Mujer $mujer)
    {
        $mujer->delete();
        return redirect()->route('admin')
            ->with('success','Mujer eliminada correctamente');
    }

}
