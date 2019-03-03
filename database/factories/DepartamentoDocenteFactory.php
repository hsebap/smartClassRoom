<?php

use Faker\Generator as Faker;

$factory->define(App\DepartamentoDocente::class, function (Faker $faker) {
    return [
        'departamento_id'=>$faker->numberBetween(1,6),
        'docente_id'=>$faker->numberBetween(1,100)
    ];
});
