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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('volta',[
  'as' => 'volta',
  'uses' => 'VoltaController@volta'
]);

Route::get('adm',['as' => 'adm', 'uses' => 'HomeController@index']);

Route::get('/altera', function () {
    return view('editar.altera');
});
