<?php

use Faker\Generator as Faker;

$factory->define(App\Docente::class, function (Faker $faker) {
    return [
    'legajo'=>$faker->unique()->randomNumber(),
    'persona_id'=>$faker->numberBetween(1,200)
    ];
});
