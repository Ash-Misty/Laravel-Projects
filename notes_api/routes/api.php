<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/register',[StudentController::class,'register']);
Route::post('/login',[StudentController::class,'login']);
Route::middleware('auth:sanctum')->post('/logout',[StudentController::class,'logout']);
Route::get('/allStudents',[StudentController::class,'display']);
Route::delete('/delete/{id}',[StudentController::class,'delete']);
Route::post('/postnote',[NoteController::class,'store']);
Route::get('/allnotes',[NoteController::class,'index']);
Route::middleware('auth:sanctum')->patch('/modifynotes/{id}',[NoteController::class,'update']);
Route::middleware('auth:sanctum')->delete('/deletenotes/{id}',[NoteController::class,'delete']);

