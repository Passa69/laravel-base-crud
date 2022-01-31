<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') -> name('home');
Route::get('/comic/index/{id}', 'HomeController@index') -> name('index');

Route::get('/comic/create', 'HomeController@create') -> name('create');
Route::post('/comic/store', 'HomeController@store') -> name('store');