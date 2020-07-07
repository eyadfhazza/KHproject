<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static pagniate(int $int)
 */
class Address extends Model
{

    protected $fillable=[
        'user_id','description',

    ];

    public function customer(){
        return $this->belongsTo(User::class);
    }

    //
}

