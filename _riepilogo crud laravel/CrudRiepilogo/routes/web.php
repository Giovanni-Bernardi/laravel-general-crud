<?php

use Illuminate\Support\Facades\Route;

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
