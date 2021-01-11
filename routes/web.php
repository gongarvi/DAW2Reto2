<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MujeresController;
use App\Http\Controllers\EspecialidadesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers;
=======
use App\Http\Controllers; 

>>>>>>> aa376b9d90afaa39abc2095a804b87dfba37e90e
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
Route::get("/juegos/matching", function(){ return view("home");})->name("matching");

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

Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");
