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



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('dealers')->group(function () {
        Route::get('/', 'DealerController@index')->name('dealers.index');
        Route::get('/create', 'DealerController@create')->name('dealers.create');
        Route::get('/{id}/view', 'DealerController@view')->name('dealers.view');
        Route::get('/{id}/edit', 'DealerController@edit')->name('dealers.edit');
        Route::post('/{id}/update', 'DealerController@update')->name('dealers.update');
        Route::post('/store', 'DealerController@store')->name('dealers.store');
    });
    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@index')->name('customers.index');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::get('/{id}/view', 'CustomerController@view')->name('customers.view');
        Route::get('/{id}/edit', 'CustomerController@edit')->name('customers.edit');
        Route::post('/{id}/update', 'CustomerController@update')->name('customers.update');
        Route::post('/store', 'CustomerController@store')->name('customers.store');
    });
    Route::prefix('emails')->group(function () {
        Route::get('/', 'EmailController@index')->name('emails.index');
        Route::POST('/send', 'EmailController@send')->name('emails.send');
    });

});






Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
