<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
   return view('welcome');
});

//Route::get('/about', function () {
//    return "Hi, about page";
//});
//
//Route::get('/contact', function () {
//    return "Hi, contact page";
//});
//
//Route::get('/post/{id}', function ($id) {
//
//    return "This is post number". $id;
//});

//Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//    $url =route('admin.home');
//
//    return "This url is ". $url;
//}));

Route::get('/users' , [UserController::class, 'index']);
Route::get('/users/create' , [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);


