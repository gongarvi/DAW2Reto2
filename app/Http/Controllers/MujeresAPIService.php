<?php

namespace App\Http\Controllers;
use App\Models\Especialidad;
use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;


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
        //return view('admin.create')->with('mujeres',Mujer::all());
        //return view('admin.create')
    }

    public function insercion(Request $request)
    {

         /* $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'apellidos' => 'required',
            'nacimiento' => 'required',
            'fallecido' => 'required',
            'nacionalidad' => 'required',
            'especialidad' => 'required', 
            'foto' => 'image|mimes:jpeg,jpg,png,svg|max:5048',
            'descripcion' => 'required',
        ]);
        if($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Rellena los campos')
            ->withErrors($validator);
        }else{
            $imagen = $request->file('foto');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('assets/Fotos_mujeres');
            $request->img->move($destino,$nombre);
            Mujer::create($request->all());

        return redirect()->route('admin')
            ->with('succes','Mujer insertada correctamente');
        }  */
        
         $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'nacimiento' => 'required',
            'fallecido' => 'required',
            'nacionalidad' => 'required',
            'especialidad' => 'required', 
            'foto' => 'required',
            'descripcion' => 'required',
        ]);
        $imagen = $request->file('foto')->store('public/assets/Fotos_mujeres');
       
        $url = Storage::url( $imagen);
        echo($url);
        Mujer::create($request->all());

        return redirect()->route('admin')
            ->with('succes','Mujer insertada correctamente');   
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
            ->with('succes','La Mujer  se ha modificado correctamente');
    }
        //Para borrar
    public function destroy(Mujer $mujer)
    {
        $mujer->delete();
        return redirect()->route('admin')
            ->with('succes','Mujer eliminada correctamente');
    }

}
