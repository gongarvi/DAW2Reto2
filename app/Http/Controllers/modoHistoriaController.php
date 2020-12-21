<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modoHistoriaController extends Controller{
    //Este contolador sera el que cargue la pantalla de inicio y los juegos (Los juegos a consultar)

    //Crearemos el acceso al modo historia 
    public function getmodoHistoria(){
        return view('modoHistoria');
    }
}
