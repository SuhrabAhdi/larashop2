<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'brand_id'=>2,
        'category_id'=>$faker->numberBetween($min=1,$max=2),
        'name'=>$faker->word,
        'url'=>$faker->word,
        'description'=>$faker->sentence,
        'price'=>100,
        'created_at_ip'=>$faker->ipv4,
        'updated_at_ip'=>$faker->ipv4
    ];
});
