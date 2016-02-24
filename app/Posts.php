<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
    	'title',
    	'content',
    	'updated_at',
    	'created_at',
    	'user_id',

    ];
}
