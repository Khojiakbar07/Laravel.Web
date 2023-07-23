<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "This is index page";
    }

    public function show($user)
    {
        return "This is show page" .$user;
    }

    public function create()
    {
        return "This is create page";
    }

}
