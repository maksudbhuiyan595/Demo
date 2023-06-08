<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FristController;


Route::get('/',[FristController::class,'index'])->name('/');
Route::get('/about',[FristController::class,'about'])->name('/about');
Route::get('/dashboard',[FristController::class,'Dash'])->name('/dashboard');

