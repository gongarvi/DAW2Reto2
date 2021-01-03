<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\modoHistoriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('welcome');
})->name("inicio");

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Abrir nuevo enlace a menu juegos y juegos
Route::get("/juegos/matching", function(){
    return view("home");
})->name("matching");

Route::get("/juegos/buscaminas", function(){
    return view("home");
})->name("buscaminas");

Route::get("/juegos",[GameController::class,"show"])->name("juegos");

Route::get("/mujeres",[MujeresController::class,"show"])->name("mujeres");

    // Las pruebas de sayeeda

    // Route::resource('/mujeres','MujeresController');

    // Route::get('/mujeres', function () {
    //     $mujeres = DB::table('mujeres')->get();

    //     $products = Productos::join('Categorias','idCategoria', '=', 'Categorias.id')
    //     ->select('Productos.id','Productos.nombre','Categorias.nombre as NombreCategoria')
    //     ->get();

    //     return view('mujeres', ['mujeres' => $mujeres]);
    // })->name('mujeres');

    // Route::get('/mujeres', function(){
    //     $mujeres =DB::table('mujeres', 'especialidades')
    //     ->join('mujeres.especialidad', '=', 'especialidades.id')
    //     ->select(' mujeres.apellidos, especialidades.Nombre ')
    //     ->get();
    //     return view('mujeres', ['mujeres' => $mujeres]);
    // })->name('mujeres');

    // Acaban las pruebas de sayeeda

Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");

