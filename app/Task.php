<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeInComplete($query) {
        $query->where('isComplete',0);
    }
}
