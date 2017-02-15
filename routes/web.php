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


// rutas web

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

// rutas gestor web protegidas con autorización

Route::group(['prefix' => 'admin' , 'middleware' => 'auth' ], function () {

      Route::get('/', 'HomeController@index');

            Route::resource('/users', 'HoraeUserController');
            Route::resource('/customers', 'HoraeCustomerController');
            Route::resource('/projects', 'HoraeProjectController');
            Route::resource('/tasks', 'HoraeTaskController');

        //   Route::get('/list_usuarios', 'HomeController@list_usuarios');
        //   Route::get('/form_usuarios', 'HomeController@form_usuarios');
        //   Route::get('/list_clientes', 'HomeController@list_clientes');
        //   Route::get('/list_proyectos', 'HomeController@list_proyectos');
        //   Route::get('/list_tareas', 'HomeController@list_tareas');
        //   Route::get('/form', 'HomeController@form');



});
