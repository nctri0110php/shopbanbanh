<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table="bills";
    protected $fillable = [
        'id_customer', 'date_order', 'total','payment','note',
    ];

    public $timestamps= true;

    //bill_billdetail
    public function billdetail(){
    	return $this->hasMany("App\billdetail","id_bill","id");
    }

    public function customer(){
    	return $this->belongsTo("App\customer","id_customer","id");
    }

}
