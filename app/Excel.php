<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $fillable = [
    	'nama-daerah', 'file'
    ];
    protected $table = 'excels';
}
