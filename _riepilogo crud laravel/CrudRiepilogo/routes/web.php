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

 Route::get('/', 'TestController@home')
 ->name('home');

Route::get('/match/{id}', 'TestController@match')
->name('match');

Route::get('/edit/{id}', 'TestController@edit')
->name('edit');
Route::post('/update/{id}', 'TestController@update')
->name('update');

Route::get('/destroy/{id}', 'TestController@destroy')
->name('destroy');

Route::get('/newMatch', 'TestController@newMatch')
 -> name('newMatch');

Route::post('/store', 'TestController@store')
 -> name('store');
