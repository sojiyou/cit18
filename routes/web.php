<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/greet', [GreetController::class, 'greet']);
Route::resource('tasks', TaskController::class);