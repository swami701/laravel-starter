<?php

namespace App;

class Comment extends BaseModel
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
