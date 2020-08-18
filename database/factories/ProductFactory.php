<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name'=> $faker->sentence(6, true),
        'count'=> $faker->randomDigit,
        'price'=> $faker->randomNumber(),
        'description'=> $faker->realText(150, 1),
        'image'=> $faker->imageUrl(800, 600,'abstract')
        
    ];
});
