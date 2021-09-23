<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "images/ip.jfif",
        "images/iPad.jfif",
        "images/iwa.jfif",
        "images/mbp.jfif",
    ]);

    return [
        'title'        => $faker->word,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
    ];
});
