<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $fillables = [
    	'route',
    	'title',
    	'slug',
    	'description',
    	'body',
    	'type'
    ];
}
