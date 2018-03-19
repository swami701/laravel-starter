<?php

namespace App;

class Post extends BaseModel
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
