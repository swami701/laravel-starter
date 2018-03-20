<?php

namespace App;

use Carbon\Carbon;

class Post extends BaseModel
{
    public static function archives()
    {
        return self::selectRaw('monthname(created_at) month, year(created_at) year, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    }

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

    public function scopeFilter($query, $filters)
    {
        if (array_key_exists('month', $filters) && $month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if (array_key_exists('year', $filters) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }
}
