<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/first_act/home', function () {
    return view('home');
});
Route::get('/first_act/greet', [GreetController::class, 'greet']);
Route::resource('tasks', TaskController::class);