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
    return view('register-client');
});
Route::post('/client','Client\ClientController@register')->name('client.register');
Route::get('/banks','BanksController@index')->name('bank.list');

