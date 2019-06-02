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

Route::view('/', 'home');
 

Route::get('contact', 'ContactFormController@create')->name('contact.name');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about')->name('about');

// Route::get('vehicles', 'VehiclesController@index');
// Route::get('vehicles/create', 'VehiclesController@create');
// Route::post('vehicles', 'VehiclesController@store');
// Route::get('vehicles/{vehicle}', 'VehiclesController@show');
// Route::get('vehicles/{vehicle}/edit', 'VehiclesController@edit');
// Route::patch('vehicles/{vehicle}', 'VehiclesController@update');
// Route::delete('vehicles/{vehicle}', 'VehiclesController@destroy');

Route::resource('vehicles', 'VehiclesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
