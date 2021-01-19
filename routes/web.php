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

//Abrir nuevo enlace a menu juegos y juegos
Route::get("/juegos/Matching", [GameController::class,"match"])->name("matching");

Route::get("/juegos/buscaminas", function(){ return view("home");})->name("buscaminas");

Route::get('/juegos/ruleta/{id}/{juego}', [GameController::class,"ruleta"]);

Route::get("/juegos/millonario", function(){
    return view("millonario");
})->name("buscaminas");

Route::get("/juegos",[GameController::class,"show"])->name("juegos");

Route::get("/juegos/Puzzle",[GameController::class,"puzzle"])->name("Puzzle");



Route::get("/mujeres",function(){
    return view("mujeres");
})->name("mujeres");

Route::get("/mujeres/info",[MujeresController::class,"show"])->name("mujeres.info");

Route::get("/especialidades/info",[EspecialidadesController::class,"show"])->name("especialidades.info");


Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");

Route::get("/mujeres/admin",[MujeresAPIService::class,"inicio"])->name("admin");
Route::get("/mujeres/create",[MujeresAPIService::class,"create"])->name("crear");
Route::get("/mujeres/insercion",[MujeresAPIService::class,"insercion"])->name("insercion");
Route::get("/mujeres/editarMujer",[MujeresAPIService::class,"editarMujer"])->name("editarMujer");
Route::get("/mujeres/actualizarMujer",[MujeresAPIService::class,"actualizarMujer"])->name("actualizarMujer");
Route::get("/mujeres/eliminarMujer",[MujeresAPIService::class,"eliminarMujer"])->name("eliminarMujer");


Route::get("/especialidades/admin",[EspecialidadesController::class,"inicio"])->name("inicio");
Route::get("/especialidades/create",[EspecialidadesController::class,"insertarEsp"])->name("insertarEsp");
Route::get("/especialidades/store",[EspecialidadesController::class,"store"])->name("store");
Route::get("/especialidades/editarEsp",[EspecialidadesController::class,"editarEsp"])->name("editarEsp");
Route::get("/especialidades/update",[EspecialidadesController::class,"actualizarEsp"])->name("actualizarEsp");
Route::get("/especialidades/destroy",[EspecialidadesController::class,"eliminarEsp"])->name("eliminarEsp"); 

/* Route::resource('especialidades','App\Http\Controllers\EspecialzacionesAPIController'); */

