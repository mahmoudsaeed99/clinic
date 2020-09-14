<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // protected $gaurded=['id'];
    protected $fillable=['name','age','totalMoney','mobile','note','heart','diabetes','allergy','bleed'];
    public function services(){
        return $this->belongsToMany('App\Services','patient_service','patient_id','service_id')
    	->withTimestamps();

    }
    public function images(){
        return $this->hasMany('App\Images');
    }
    public function booking(){
        return $this->hasMany('App\Booking');
    }
       
}
