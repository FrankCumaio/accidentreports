<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::resource('Sessions','SessionsController');
Route::get('/', 'publicacaoController@home');
Route::get('registo', 'usuariosController@registo');
Route::post('gravar', 'publicacaoController@gravar');
Route::post('gravarComentario', 'publicacaoController@gravarC');
//Route::post('login', 'Auth\AuthController@login');
//Route::post('logout', 'SessionController@destroy');
//Route::post('gravarUsuario', 'usuariosController@gravarUsuario');


Route::get('auth/login', array('uses' => 'HomeController@showLogin'));

// route to process the form
//Route::post('login', array('uses' => 'HomeController@doLogin'));
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'HomeController@showRegister');
Route::post('auth/register', 'Auth\AuthController@create');
Route::post('gravarUsuario', 'usuariosController@gravarUsuario');