<?php

use Faker\Generator as Faker;

$factory->define(App\AsistenciaEstudiante::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->dateTime(),
        'presente'=>$faker->boolean(),
        'estudiante_id'=>$faker->numberBetween(1,100),
        'clase_id'=>$faker->numberBetween(1,50),

    ];
});
