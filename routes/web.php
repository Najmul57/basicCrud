<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/',[CrudController::class,'show']);
Route::get('/add',[CrudController::class,'add']);
Route::post('/store',[CrudController::class,'store']);
Route::get('/edit/{id}',[CrudController::class,'edit']);
Route::post('/update/{id}',[CrudController::class,'update']);
Route::get('/delete/{id}',[CrudController::class,'delete']);
