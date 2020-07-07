<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
     'amount','order_id','user_id', 'paid_on',
    ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
