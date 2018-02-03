<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description'=> $faker->sentence(30),
        'price'=> $faker->randomFloat(4, 6, 150)
        //'create_at'=>$faker->dateTime($max = 'now', $timezone = null)
    ];
});
