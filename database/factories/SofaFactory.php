<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sofa;
use Faker\Generator as Faker;

$factory->define(Sofa::class, function (Faker $faker) {
    return [
        'merksofa' => $faker->company,
        'hargasofa' => $faker->numberBetween(900000,50000000),
        'berat' => $faker->numberBetween(5000,19000),
        'tersedia' => $faker->numberBetween(0,1),
    ];
});
