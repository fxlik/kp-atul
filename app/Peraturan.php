<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = [
    	'title', 'content', 'image'
    ];
    protected $table = 'm-peraturans';
}
