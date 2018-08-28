<?php

use Faker\Generator as Faker;

$factory->define(App\RelatedModel::class, function (Faker $faker) {
    return [
        'identifier_1' => $faker->numberBetween(0,100),
        'identifier_2' => $faker->numberBetween(0,100),
        'description' => $faker->word
    ];
});
