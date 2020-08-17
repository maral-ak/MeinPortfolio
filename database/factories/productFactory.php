<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=>factory(\App\Category::class),
        'title_pd'=>$faker->sentence,
        'title_img_pd'=>$faker->sentence,
        'description_pd'=>$faker->paragraph,
        'frame_pd'=>$faker->sentence,
        'material_pd'=>$faker->sentence,
        'quantity_pd'=>$faker->randomNumber($nbDigits = 3, $strict = true)
    ];
});




