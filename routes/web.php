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

// Route::get('/todoo/{id}', [
// 	// 'uses' => 'TodooController@destroy',
// 	// 'as' => 'todoo.delete'
// ]);

// // Route::DELETE('todoo/{id}','TodooController@destroy');
// Route::get('','')
Route::get('todoo/{id}','TodooController@completed')->name('todoo.destroy');
Route::get('todoo/{id}','TodooController@destroy')->name('todoo.completed');



Route::resource('todoo','TodooController');
