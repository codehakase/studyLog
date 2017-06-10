<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'log_day', 'hours_spent', 'summary', 'log_id', 'user_id', 'technologies', 'resource'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
