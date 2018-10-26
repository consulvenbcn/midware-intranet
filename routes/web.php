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

Route::get('/', function () {
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::resource('/tipo/tipoDocumentos', 'TipoDocumentosController');
Route::resource('/menu/usuariosSys','UsuariosSysController');
Route::get('/menu/search/usuariosSys/','UsuariosSysController@getSearch');
Route::post('/menu/search/usuariosSys/','UsuariosSysController@postSearch');
Route::get('/menu/password/usuariosSys/{id}','UsuariosSysController@getPassword');
Route::put('/menu/password/usuariosSys/{id}','UsuariosSysController@postPassword');
