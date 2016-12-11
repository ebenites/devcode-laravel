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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', ['uses' => 'LoginController@login']);
Route::post('login', ['as' => 'postlogin', 'uses' => 'LoginController@postlogin']);
Route::get('logout', ['uses' => 'LoginController@logout']);

Route::get('users', ['middleware' => ['auth'], 'uses' => 'UserController@getUsers']);


// Para el super administrador
Route::group(['as' => 'superadmin'], function(){
    Route::get('dashboard', function(){
        
    });
});

// Dueños de la playa de estacionamiento
Route::group(['as' => 'admin'], function(){
    Route::get('dashboard', function(){
        
    });
});

// Clientes
Route::group(['as' => 'customer'], function(){
    Route::get('dashboard', function(){
        
    });
});

// Listar las playas de estacionamiento
Route::group(['as' => 'parketing'], function(){
    Route::get('dashboard', function(){
        
    });
});

// Para la navegación en el portal
Route::group(['as' => '/'], function(){
    Route::get('listar', function(){
        
    });
    Route::get('solicitud', function(){
        
    });
});