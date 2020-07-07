<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     protected $fillable=[
         'meal_id','url',
     ];
     public function  meal(){
         return $this->hasOne(Meal::class);
     }
}
