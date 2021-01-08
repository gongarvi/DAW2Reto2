<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\EspecialidadesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers; 
use Illuminate\Support\Facades\DB;
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
function cargarMujeres(){
    $tablaMujer = DB::table('mujeres')->limit(12)->get();
    return $tablaMujer;
}
Route::get("/juegos/matching", function(){
    return view("matching",["mujeres"=>self::cargarMujeres()]);
})->name("matching");

Route::get("/juegos/buscaminas", function(){
    return view("home");
})->name("buscaminas");

Route::get("/juegos/millonario", function(){
    return view("millonario");
})->name("buscaminas");

Route::get("/juegos",[GameController::class,"show"])->name("juegos");

Route::get('/mujeres', function () {
    return view('mujeres');
})->name("mujeres");

Route::get("/mujeres/info",[MujeresController::class,"show"])->name("mujeres.info");
Route::get("/especialidades/info",[EspecialidadesController::class,"show"])->name("especialidades.info");

Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");


