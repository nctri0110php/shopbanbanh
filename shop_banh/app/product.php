<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='products';
    protected $fillable = [
        'name', 'id_type', 'description','unit_price','promotion_price','image','unit','new',
    ];

    public $timestamps= true;

    public function billdetail(){
    	return $this->hasMany("App\billdetail","id_product","id");
    }

    public function typeproduct(){
    	return $this->hasMany("App\product","id_product","id");
    }
}

