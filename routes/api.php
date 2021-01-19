<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PreguntasAPIService;
<<<<<<< HEAD
use \App\Http\Controllers\EspecialzacionesAPIController;
=======
use \App\Http\Controllers\EspecializacionesAPIService;
>>>>>>> c0ca664fd53bf123d465304b4fab8f9d8b03e8ac
use \App\Http\Controllers\MujeresAPIService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("preguntas",PreguntasAPIService::class);
<<<<<<< HEAD
Route::apiResource("especialidades",EspecialzacionesAPIController::class);
=======
Route::apiResource("especialidades",EspecializacionesAPIService::class);
>>>>>>> c0ca664fd53bf123d465304b4fab8f9d8b03e8ac
Route::get("mujeres",[MujeresAPIService::class,"index"]);
Route::get("mujeres/{cantidad}/{especializacion}",[MujeresAPIService::class,"show"]);
//Route::apiResource("mujeres",MujeresAPIService::class);

