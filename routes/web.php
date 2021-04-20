<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dealers', 'DealerController@index')->name('dealers.index');
Route::get('/dealers/create', 'DealerController@create')->name('dealers.create');
Route::get('/dealers/{id}/view', 'DealerController@view')->name('dealers.view');
Route::get('/dealers/{id}/edit', 'DealerController@edit')->name('dealers.edit');
Route::post('/dealers/{id}/update', 'DealerController@update')->name('dealers.update');

Route::post('/dealers/store', 'DealerController@store')->name('dealers.store');

// Route::get('/dealers/create', 'DealerController@create')->name('dealers.create');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
