<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productss;
use Faker\Generator as Faker;

$factory->define(Productss::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' =>$faker->numberBetween($min = 0, $max = 100000) ,
        'discount' =>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1),
        'discript'=>$faker->realText(30)
        //
    ];
});
