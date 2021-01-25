<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\EspecialidadesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
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
Route::get("/juegos/matching", function(){ return view("home");})->name("matching");

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


Route::post("/fotosperfil/{id}",[PerfilController::class,"fotosperfil"])->name("fotosperfil");
Route::get("/actualizarfoto/{id}/{nombrefoto}",[PerfilController::class,"actualizarfoto"])->name("actualizarfoto");
Route::get("/perfil/{id}",[PerfilController::class,"edit"])->name("perfil");
Route::post("/actualizarPerfil/{id}",[PerfilController::class,"update"])->name("actualizarPerfil");
Route::post("/eliminarPerfil/{id}",[PerfilController::class,"delete"])->name("eliminarPerfil");

