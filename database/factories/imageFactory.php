<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'product_id'=>factory(\App\Product::class),
        'img_name'=>$faker->sentence
    ];
});
