<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static paginate()
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password','last_name',
        'mobile','email_verified','mobile_verified','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function wishlist(){
        return $this->hasOne(Wishlist::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function role(){
        return $this->belongsToMany(Role::class,'role_user','role_id');
    }
}
