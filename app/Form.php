<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $guarded = [
        'id', 
        'created_at', 
        'published_at'
    ];
}
