<?php

use Illuminate\Http\Request;

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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/usuarios', ['uses'=>'UsuarioController@getAllUsuarios']);
Route::post('/usuario', ['uses'=>'UsuarioController@SaveUsuario']);
Route::put('/usuario/{id}', ['uses'=>'UsuarioController@UpdateUsuario']);
Route::get('/usuario/{id}', ['uses'=>'UsuarioController@getUsuario']);
Route::delete('/usuario/{id}', ['uses'=>'UsuarioController@DeleteUsuario']);
