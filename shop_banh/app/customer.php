<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    protected $fillable = [
        'name', 'gender', 'email','address','phone_number','note',
    ];

    public $timestamps= true;

    public function bill(){
    	return $this->hasMany("App\bill","id_customer","id");
    }
}
