<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function edit($id){
        $persona = User::all()->find($id);
        return view('perfil.edit',['usuario'=>$persona]);
    }

    public function update(Request $request, $id){ 
        $request->validate([
            'funcion' => ['required'],
        ]);
        $persona=User::all()->find($id);
        
        // para cambiar los datos del usuario
        if($request["funcion"]==="datos"){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);
            $data=$request->all();
            if(Hash::check($data["password"],$persona->password)){
                unset($data["password"]);
                unset($data["email"]);
                $persona->update($data);
            }else{
                return view('perfil.edit',['usuario'=>$persona])->with("error","No se han modificado los datos");
            }
        }
        // para cambiar la contraseña
        elseif($request["funcion"]==="contrasena"){
            $request->validate([
                'password_anterior' => ['confirmed', 'string', 'min:8', 'confirmed'],
                'password_nueva' => ['confirmed', 'string', 'min:8', 'confirmed'],
                'password_confirmar' => ['confirmed', 'string', 'min:8', 'confirmed'],
            ]);
            if($request->input('password_nueva')==$request->input('password_confirmar') ){
                if(Hash::check($request->input('password_anterior'),$persona->password)){
                    $data["password"]=Hash::make($request->input('password_nueva'));
                    $persona->update($data);
                }else{
                    return view('perfil.edit',['perfil'=>$persona])->with("error","No se ha cambiado la contraseña");
                }
                $data["password"]=Hash::make($request->input('password_nueva'));
                $persona=User::all()->find($id);
                $persona->update($data);
            }
        }
        return response()->redirectTo(route("perfil",$persona->id));
        

    }
}
