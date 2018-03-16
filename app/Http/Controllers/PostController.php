<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($post)
    {
        return view('posts.show');
    }

}
