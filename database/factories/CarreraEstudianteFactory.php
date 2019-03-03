<?php

use Faker\Generator as Faker;

$factory->define(App\CarreraEstudiante::class, function (Faker $faker) {
    return [
        'carrera_id'=>$faker->numberBetween(1,5),
        'estudiante_id'=>$faker->numberBetween(1,200)
    ];
});
