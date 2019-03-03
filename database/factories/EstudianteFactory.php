<?php

use Faker\Generator as Faker;

$factory->define(App\Estudiante::class, function (Faker $faker) {
    return [
    'legajo'=>$faker->unique()->randomNumber(),
    'añoIngreso'=>$faker->year(),
    'paisOrigen'=>$faker->country,
    'provinciaOrigen'=>$faker->state,
    'persona_id'=>$faker->numberBetween(1,200)
    ];
});
