<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\categories::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['drinks','dinner','breakfast','lunch','juise']),
    ];
});
