<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
    public function edit($id){
        $persona = DB::table('users')->where('id', '=', $id)->get();
        return view('perfil.edit',['perfil'=>$persona]);
    }
}
