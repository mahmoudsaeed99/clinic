<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable=['patient_id','img'];
   public function patient(){
       return $this->belongsTo('App\Patient');
   }
}
