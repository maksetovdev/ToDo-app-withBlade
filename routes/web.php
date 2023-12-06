<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class,'index'])->name('index');

Route::get('/AddTask', function () {
    return view('addTask');
})->name('addTask');

Route::post('/add_task',[TaskController::class,'store'])->name('add_task');

Route::get('/delete/{id}',[TaskController::class,'destroy'])->name('delete');

Route::get('/update_1/{id}', function($id)
{
    return view('updateTask',['id' => $id]);
})->name('update_1');

Route::post('/update_2/{id}',[TaskController::class,'update'])->name('update_2');
