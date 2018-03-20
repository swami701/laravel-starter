<?php

namespace App;

class Post extends BaseModel
{
    public function addComment($body, $user_id)
    {
        $this->comments()->create(compact(['body', 'user_id']));
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
