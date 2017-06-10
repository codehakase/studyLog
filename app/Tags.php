<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'user_id', 'streak', 'tag'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
