<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/AddTask', function () {
    return view('addTask');
})->name('addTask');

Route::post('/add_task',[TaskController::class,'store'])->name('add_task');

