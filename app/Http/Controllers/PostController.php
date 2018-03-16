<?php

namespace App\Http\Controllers;

use App\Post;

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

    public function store()
    {
        Post::create(request(['title', 'body']));
        return redirect('/posts');
    }

    public function show($post)
    {
        return view('posts.show');
    }
}
