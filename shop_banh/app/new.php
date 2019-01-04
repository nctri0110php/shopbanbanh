<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new extends Model
{
    protected $table='news';
    protected $fillable = [
        'title', 'content', 'image',
    ];

    public $timestamps= true;
}
