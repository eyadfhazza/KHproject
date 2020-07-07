<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 */
class Meal extends Model
{
    protected $fillable=[
        'name','description','price','category_id',
    ];

    public function image(){
        return $this->hasOne(Image::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }

    public function category(){
        return $this->belongsTo(categories::class);
    }
}
