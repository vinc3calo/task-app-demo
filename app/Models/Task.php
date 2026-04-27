<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //initially empty
    protected $fillable = ['title', 'is_done'];
}
