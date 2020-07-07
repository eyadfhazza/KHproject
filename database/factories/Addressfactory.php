<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Address::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1,100),
        'description'=>$faker->streetAddress,
        //
    ];
});
