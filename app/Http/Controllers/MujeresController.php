<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MujeresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return Mujer::with("Especialidad")->get();

        // return view('mujeres',["mujeres"=>$mujeres], ["especialidades"=>$especialidades]); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mujer  $mujer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mujer::all()->where("id","==",$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mujer  $mujer
     * @return \Illuminate\Http\Response
     */
    public function edit(Mujer $mujer)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mujer  $mujer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mujer $mujer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mujer  $mujer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mujer $mujer)
    {
        //
    }
    public function inicio()
    {

        $mujeres = Mujer::with('especialidades')->paginate(20);
        
        return view('adminMujeres.inicio')
            ->with(["mujeres"=>$mujeres]);
            //'success', (request()->input('page', 1) - 1) * 20
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $especialidades = Especialidad::get();
         return view('adminMujeres.createM')->with('especialidades',$especialidades); 
       
    }

    public function insercion(Request $request)
    {
        $data=$request->all();
        
       if($request->hasFile('foto')){
           $archivo = $request->file('foto');
           $nombre = $archivo->getClientOriginalName();
           //Este disk 'public' lo hemos configurado en el archivo 'config\filesystems.php'
           //es ahi donde indicamos la carpeta donde queremos guardar los archivos cargados
           $path=Storage::disk('public')->put($nombre, $archivo); 
           $data["foto"]=$path;
        } 
       
        Mujer::create($data);
        return redirect()->route('adminMujer')
            ->with('success','La Mujer ha sido insertada correctamente');
                  
        
    }

    //Para actualizar
    public function editarMujer($id)
    {

       return view('adminMujeres.editM')->with(["mujer"=>Mujer::with("especialidades")->where("id",$id)->get()->first(),"especialidades"=>Especialidad::all()]);
       
    }

    public function actualizarMujer(Request $request, Mujer $mujer)
    {
        echo $mujer;
        die;
        Mujer::all()->where("id",$mujer->id)->first()->update($request->all());
         
        //$mujer->update($request->all());
        
        return redirect()->route('adminMujer')
            ->with('success','La Mujer  se ha modificado correctamente');
    }
        //Para borrar
    public function eliminarMujer($id)
    {
        Mujer::all()->find($id)->delete();
        
        return redirect()->route('adminMujer')
            ->with('success','Mujer eliminada correctamente');
    }
}
