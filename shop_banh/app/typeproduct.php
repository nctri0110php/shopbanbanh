<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeproduct extends Model
{
    protected $table='type_products';
    protected $fillable = [
        'name', 'description', 'image',
    ];

    public $timestamps= true;
}
