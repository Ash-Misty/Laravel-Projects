<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cseController;
use App\Http\Controllers\HostellersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//CSE Students
Route::post('/cseData',[cseController::class,'store']);
Route::get('/cseList',[cseController::class,'index']);
Route::put('/updateCse/{id}',[cseController::class,'update']);
Route::delete('/deleteCse/{id}',[cseController::class,'delete']);
Route::get('/csefetch/{email}',[cseController::class,'fetch']);

//Hostellers
Route::post('/addHosteller',[HostellersController::class,'store']);
Route::put('/update/{id}',[HostellersController::class,'update']);
Route::get('/display',[HostellersController::class,'index']);
Route::get('/filter/{Hostel_Serial_no}',[HostellersController::class,'filter']);
Route::delete('/delete/{Hostel_Serial_no}',[HostellersController::class,'delete']);
