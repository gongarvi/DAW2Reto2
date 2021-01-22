<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresAPIService;
use App\Http\Controllers\EspecialidadesController;

use App\Http\Controllers\MujeresController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get("/juegos/matching", [GameController::class,"match"])->name("matching");

Route::get("/juegos/buscaminas", function(){ return view("buscaminas");})->name("buscaminas");

Route::get("/juegos/millonario", function(){
    return view("millonario");
})->name("millonario");

Route::get('/juegos/ruleta/{id}/{juego}', [GameController::class,"ruleta"]);



<<<<<<< HEAD
Route::get("/juegos",[GameController::class,"show"])->name("juegos");
=======
Route::get("/juegos/UltimoNivel", function(){ 
    return view("UltimoNivel");
})->name("UltimoNivel");

>>>>>>> 2041ed01e7620fa8958077b361f1927d8ffc3ebd

Route::get("/juegos/Puzzle",[GameController::class,"puzzle"])->name("Puzzle");

Route::get("/mujeres",function(){
    return view("mujeres");
})->name("mujeres");

<<<<<<< HEAD
Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");

Route::resource("admin/mujeres",MujeresController::class,["except"=>["show"]]);
/*
Route::get("/mujeres/admin",[MujeresController::class,"inicio"])->name("adminMujer");
Route::get("/mujeres/create",[MujeresController::class,"create"])->name("nuevaMujer");
Route::post("/mujeres/insercion",[MujeresController::class,"insercion"])->name("insertarMujer");
Route::get("/mujeres/editarMujer/{id}",[MujeresController::class,"editarMujer"])->name("editarMujer");
Route::put("/mujeres/actualizarMujer",[MujeresController::class,"actualizarMujer"])->name("actualizarMujer");
Route::delete("/mujeres/eliminarMujer/{id}",[MujeresController::class,"eliminarMujer"])->name("eliminarMujer");

*/

Route::get("/especialidades/admin",[EspecialidadesController::class,"inicio"])->name("adminEspecialidad");
Route::get("/especialidades/create",[EspecialidadesController::class,"insertarEsp"])->name("nuevaEspecialidad");
Route::get("/especialidades/store",[EspecialidadesController::class,"store"])->name("insertarEspecialidad");
Route::get("/especialidades/editar/{id}",[EspecialidadesController::class,"editarEsp"])->name("editarEspecialidad");
Route::post("/especialidades/update",[EspecialidadesController::class,"actualizarEsp"])->name("actualizarEspecialidad");
Route::delete("/especialidades/destroy/{id}",["middleware"=>"auth","uses"=>[EspecialidadesController::class,"eliminarEsp"]])->name("eliminarEspecialidad");



=======


Route::get("/perfil/{id}",[UserController::class,"edit"])->name("perfil");
Route::post("/actualizar/{id}",[UserController::class,"update"])->name("actualizar");
>>>>>>> 2041ed01e7620fa8958077b361f1927d8ffc3ebd

