<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Hi, about page";
});

Route::get('/contact', function () {
    return "Hi, contact page";
});

Route::get('/post/{id}', function ($id) {

    return "This is post number". $id;
});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
    $url =route('admin.home');

    return "This url is ". $url;
}));

