<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=[
            'user_id','meal_id','stars','review'
        ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function meal(){
        return $this->belongsTo(Meal::class);
    }
    public function formattedtime(){
        return Carbon::createFromTimestamp(strtotime( $this->created_at))->diffForHumans();
    }

}
