<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{

    protected $table='slide';
    public $timestamp=false;
    protected $fillable = [
        'link', 'image',
    ];
}
