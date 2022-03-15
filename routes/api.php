<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/prueba', function(){
    $respuesta = array();
    $respuesta["nombre"] = "Jesus";
    $respuesta["apellido"] = "Pedroza";
    return $respuesta;
});*/
//use App\Http\Controllers\Api\RespuestasController;
//Route::post('/respuestas',[RespuestasController::class,'store'])->name('api.respuestas.store');

Route::post('/respuestas','Api\RespuestasController@store')->name('api.respuestas.store');

Route::get('/tipousuario', 'Api\TiposUsuarioController@index')->name('api.tiposusuarios.index');

Route::get('/sintomas', 'Api\SintomasController@index')->name('api.sintomas.index');