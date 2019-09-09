<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => $faker->slug(),
        'body' => $faker->paragraphs(rand(2, 5), true),
        'category_id' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
