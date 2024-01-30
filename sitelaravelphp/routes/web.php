<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('clients/', 'App\Http\Controllers\ClientsController@getIndex');
Route::get('delete_clients/{id}', 'App\Http\Controllers\ClientsController@deleteClient');
Route::get('insert_client', 'App\Http\Controllers\ClientsController@insertClient');
