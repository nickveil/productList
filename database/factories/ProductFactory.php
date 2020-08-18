<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

    return [
        'name'=> $faker->sentence(6, true),
        'count'=> $faker->randomDigit,
        'price'=> $faker->randomFloat(2, 0.00, 10000.00),
        'description'=> $faker->realText(150, 1),
        'image'=> $faker->imageUrl(800, 600,'abstract')
        
    ];
});
