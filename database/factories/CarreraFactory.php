<?php

use Faker\Generator as Faker;

$factory->define(App\Carrera::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->unique()->word,
    ];
});
