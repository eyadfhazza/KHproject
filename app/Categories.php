<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class categories extends Model
{

    protected $fillable=[
      'name',
    ];

    public  function meal(){
        return $this->hasMany(Meal::class);
    }
}
