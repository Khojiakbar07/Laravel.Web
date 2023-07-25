<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/' , [PageController::class, 'main']);
Route::get('/index.html' , [PageController::class, 'main']);
Route::get('/about.html' , [PageController::class, 'about']);
Route::get('/service.html' , [PageController::class, 'service']);
Route::get('/price.html' , [PageController::class, 'price']);


Route::get();




