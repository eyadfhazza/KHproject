<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Meal::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'category_id'=>$faker->numberBetween(1,4),
        'description'=>$faker->text,
        'price'=>$faker->randomFloat(2,10,500),
    ];
});
