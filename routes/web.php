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
Route::post('/clients','Client\ClientController@register')->name('client.register');
Route::get('/banks','BanksController@index')->name('bank.list');
Route::post('/transactions','Transaction\TransactionController@create')->name('tran.create');
Route::get('/transactions/information','Transaction\TransactionController@information')->name('tran.info');

Route::get('/transactions/list','Transaction\TransactionController@transactionList')->name('tran.list');
Route::get('/transactions/information/list','Transaction\TransactionController@infoTransactionList')->name('tran.info.list');
