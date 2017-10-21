<?php

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


//
//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', 'PagesController@index');

Route::resource('usuarios', 'UsuarioController');
Route::get('/visitag', 'VisitaGEscolaController@index');




// area de acesso
Route::get('/acesso/login', 'AcessoController@login');
Route::get('/acesso/registar', 'AcessoController@registar');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
