<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $guarded = [
        'id', 
        'username', 
        'created_at', 
        'published_at'
    ];
}
