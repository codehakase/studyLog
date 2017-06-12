<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tags()
    {
        return $this->hasMany(Tags::class);
    }

    /**
     * return all logs made by a User
     *
     * @return Collection
     */
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    
    /**
     * Get all task for the user
     *
     * @return void
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
