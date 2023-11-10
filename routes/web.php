<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/AddTask', function () {
    return view('addTask');
})->name('addTask');

