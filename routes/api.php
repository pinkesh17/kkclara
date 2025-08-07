<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LocationController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



 




Route::middleware(['auth:sanctum', 'check.token.expiry'])->group(function () {
    Route::post('/user', [UserController::class, 'userDetails']);
    // Add other protected routes here



    Route::get('/countries', [LocationController::class, 'countries']);
   
    /*Route::get('/states/{countryId}', [LocationController::class, 'states']);
    Route::get('/cities/{stateId}', [LocationController::class, 'cities']);*/
});


Route::post('login',[UserController::class,'loginUser']);


Route::group(['middleware' => 'auth:sanctum'],function(){
    //Route::get('user',[UserController::class,'userDetails']);
    Route::get('logout',[UserController::class,'logout']);
});


/*

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/