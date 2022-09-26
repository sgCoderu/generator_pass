<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Generator@index')->name('index');
Route::post('/generate', 'App\Http\Controllers\Generator@generate')->name('generate');
