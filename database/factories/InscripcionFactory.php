<?php

use Faker\Generator as Faker;

$factory->define(App\Inscripcion::class, function (Faker $faker) {
    return [
        'estudiante_id'=>$faker->numberBetween(1,200),
        'horario_id'=>$faker->numberBetween(1,80),
    ];
});
