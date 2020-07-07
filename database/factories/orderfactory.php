<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [

        'user_id'=>$faker->numberBetween(1,100),
        'payment_id'=>$faker->numberBetween(1,3),
        'cart_id'=>$faker->numberBetween(1,50),

        //
    ];
});
