<?php

namespace App;

class Post extends BaseModel
{
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
