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

Route::resources([
    'stocks' => 'StockController',
    'users' => 'UserController'
]);

Route::get('/', function () {
    return view('back.welcome');
})->middleware('auth');


Route::get('/addstock', function () {
    return view('back.stock.addstock');
})->name('stock');

Route::get('/adduser','UserController@create')->name('users.create');
// Route::get('/adduser','UserController@store')->name('user.store');

Route::get('/stocks', 'StockController@index')->name('manager');

Route::get('/ventes', 'VenteController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
