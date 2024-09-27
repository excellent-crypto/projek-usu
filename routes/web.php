<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\sessioncontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [sessioncontroller::class, 'home']);

Route::resource('/admin', AdminsController::class);


Route::get('/session',[sessioncontroller::class,'index']);
Route::get('/session/logout',[sessioncontroller::class,'logout']);
Route::post('/session/login',[sessioncontroller::class,'login']);
