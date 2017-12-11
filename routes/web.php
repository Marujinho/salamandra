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
    return view('welcome');
});


/*
/------------------------------------------------
/ COMECA CRUD DO MENU DO BAR
/------------------------------------------------
*/

Route::group(['prefix' => 'menu'], function(){

	Route::get('/', 'menuController@index');


	Route::get('ifujdsh', 'menuController@create')->name('avada.kabunda');

	Route::post('criar', 'menuController@store');

	Route::get('editarMenu', 'menuController@form');

	Route::put('editar/{id}', 'menuController@update');

	Route::delete('deletar/{id}', 'menuController@destroy');

});
