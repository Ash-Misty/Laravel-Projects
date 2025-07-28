<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cseData',[cseController::class,'store']);
Route::get('/cseList',[cseController::class,'index']);
Route::put('/updateCse/{id}',[cseController::class,'update']);
Route::delete('/deleteCse/{id}',[cseController::class,'delete']);
Route::get('/csefetch/{email}',[cseController::class,'fetch']);
