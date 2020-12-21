<?php

use App\Http\Controllers\GameController;
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

<<<<<<< HEAD
//Esta sera la ruta al controllador de la pestaña del modo historia
Route::get('/modoHistoria', [modoHistoriaController::class, 'getmodoHistoria']);
=======
//Abrir nuevo enlace a menu juegos y juegos
Route::get("/juegos/matching", function(){
    return view("home");
})->name("matching");

Route::get("/juegos/buscaminas", function(){
    return view("home");
})->name("buscaminas");

Route::get("/juegos",[GameController::class,"show"])->name("juegos");

Route::get("/mujeres",[GameController::class,"show"])->name("mujeres");

Route::get("/perfil",[GameController::class,"show"])->name("perfil");

Route::get("/logout",[GameController::class,"show"])->name("logout");

>>>>>>> 84bfbec3bfe2636fc566db2311ede304ba5eb215
