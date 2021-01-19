<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresAPIService;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\EspecialzacionesAPIController;
use App\Http\Controllers\EspecialidadesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\modoHistoriaController;
use Illuminate\Support\Facades\Route;
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

Route::get('/panelControl', [HomeController::class, 'panelControl'])->name('panel');

//Abrir nuevo enlace a menu juegos y juegos
Route::get("/juegos/Matching", [GameController::class,"match"])->name("matching");

Route::get("/juegos/buscaminas", function(){ return view("home");})->name("buscaminas");

Route::get('/juegos/ruleta/{id}/{juego}', [GameController::class,"ruleta"]);

Route::get("/juegos/millonario", function(){
    return view("millonario");
})->name("buscaminas");

Route::get("/juegos",[GameController::class,"show"])->name("juegos");

Route::get("/juegos/Puzzle",[GameController::class,"puzzle"])->name("Puzzle");

Route::get("/juegos/UltimoNivel", function(){ 
    return view("UltimoNivel");
})->name("UltimoNivel");



Route::get("/mujeres",function(){
    return view("mujeres");
})->name("mujeres");

Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");

Route::get("/mujeres/admin",[MujeresController::class,"inicio"])->name("admin");
Route::get("/mujeres/create",[MujeresController::class,"create"])->name("crear");
Route::post("/mujeres/insercion",[MujeresController::class,"insercion"])->name("insercion");
Route::get("/mujeres/editarMujer/{id}",[MujeresController::class,"editarMujer"])->name("editarMujer");
Route::put("/mujeres/actualizarMujer",[MujeresController::class,"actualizarMujer"])->name("actualizarMujer");
Route::delete("/mujeres/eliminarMujer/{id}",[MujeresController::class,"eliminarMujer"])->name("eliminarMujer");


Route::get("/especialidades/admin",[EspecialidadesController::class,"inicio"])->name("inicio");
Route::get("/especialidades/create",[EspecialidadesController::class,"insertarEsp"])->name("insertarEsp");
Route::get("/especialidades/store",[EspecialidadesController::class,"store"])->name("store");
Route::get("/especialidades/editar/{id}",[EspecialidadesController::class,"editarEsp"])->name("editarEspecialidad");
Route::put("/especialidades/update",[EspecialidadesController::class,"actualizarEsp"])->name("actualizarEspecialidad");

Route::delete("/especialidades/destroy/{id}",["middleware"=>"auth","uses"=>[EspecialidadesController::class,"eliminarEsp"]])->name("eliminarEspecialidad"); 

/* Route::resource('especialidades','App\Http\Controllers\EspecialzacionesAPIController'); */

