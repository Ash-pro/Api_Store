<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'details'=>$faker->paragraph,
        'image'=>$faker->imageUrl($width = 640, $height = 480),
        'price'=>$faker->numberBetween(100,600),
        'stock'=>$faker->numberBetween(1,40),
        'discount'=>$faker->numberBetween(10,50),
    ];
});
