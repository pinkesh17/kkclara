<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [HomeController::class, 'index']);

Auth::routes();


/*
Route::get('/', [HomeController::class, 'index']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


*/