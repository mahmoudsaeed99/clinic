<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $gaurded=['id'];
    protected $fillable =['name','price'];
    public function patients(){
        return $this->belongsToMany('App\Patient','patient_service','service_id','patient_id');

    }
    
}
