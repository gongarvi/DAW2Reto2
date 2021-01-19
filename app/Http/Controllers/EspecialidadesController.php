<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Mujer;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {   
        $especialidades = Especialidad::latest()->paginate(20);
        return view('especialidades.index', compact('especialidades'))
            ->with('success', (request()->input('page', 1) - 1) * 20);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertarEsp()
    {
        return view('especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'color' => 'required',
        ]);

        Especialidad::create($request->all());

        return redirect()->route('cargarEsp')
            ->with('success','Especialidad insertada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidad $especialidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function editarEsp($id)
    {

        return view('especialidades.edit')->with('especialidad',Especialidad::all()->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function actualizarEsp(Request $request, Especialidad $especialidad)
    {
        $request->validate([
           
            ]);
    
            $especialidad->update($request->all());
    
            return redirect()->route('cargarEsp')
                ->with('success','Especialidad  se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function eliminarEsp($id)
    {
        
        Especialidad::all()->find($id)->delete();
        return redirect()->route('cargarEsp')
            ->with('success','Especialidad  eliminada correctamente');
    }
}
