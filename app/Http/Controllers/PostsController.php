<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $postsRepo)
    {
        //SQSMQJob::dispatch("SQS hello world");
        //RedisMQJob::dispatch("Redis hello world");
        //Queue::push("App\Jobs\RedisMQManualHandler@handle", ['hello' => 'world']);
        $posts = $postsRepo->find(request(['month', 'year']));
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title'                => 'required',
            'body'                 => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        auth()->user()->publish(new Post(request(['title', 'body'])));
        session()->flash('message', 'Your post is successful!');
        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
