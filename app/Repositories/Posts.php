<?php

namespace App\Repositories;

use App\Post;

class Posts
{
    public function find($filters)
    {
        return Post::latest()
            ->filter($filters)
            ->get();
    }
}
