<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class,'index']);
Route::get('/About', [HomeController::class,'about']);
Route::get('/Contact', [HomeController::class,'contact']);



