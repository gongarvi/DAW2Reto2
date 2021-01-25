<?php

namespace App\Http\Controllers;

use App\Models\Fotosperfil;
use Illuminate\Http\Request;
use App\Models\Mujer;

class fotosperfilController extends Controller
{
   
    public function show($id){
        $fotosperfil = Fotosperfil::all()
        ->find($id)
        ->with("Mujer")
        ->get();
        return view('perfil.edit',['usuario'=>$fotosperfil]);
    }
}
