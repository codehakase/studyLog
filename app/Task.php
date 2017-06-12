<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    *
    * assignable attibutes to the Model
    * @var array
    */
    protected $fillable = ['name', 'status'];

    /**
     * Get the user that owns the task
     *
     * @return void
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
