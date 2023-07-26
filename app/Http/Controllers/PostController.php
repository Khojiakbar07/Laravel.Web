<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        return view();
    }

    public function show(string $id)
    {
        return view();
    }

    public function edit(string $id)
    {
        return view();
    }

    public function update(Request $request, string $id)
    {
        return view();
    }

    public function destroy(string $id)
    {
        return view();
    }
}
