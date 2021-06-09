<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contactus;
use Faker\Generator as Faker;

$factory->define(contactus::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' =>$faker->email,
        'phone' =>$faker->phoneNumber,
        'content'=>$faker->realText(30)
    ];
});
