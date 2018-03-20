<?php

namespace App\Http\Controllers;

use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required|min:2']);
        $post->addComment(request('body'), auth()->id());
        session()->flash('message', 'Your comment added successfully!');
        return back();
    }
}
