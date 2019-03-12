<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Relationship Many To Many
     **/
    public function employees()
    {
        return $this->belongsToMany('App\Models\employee');
    }
}
