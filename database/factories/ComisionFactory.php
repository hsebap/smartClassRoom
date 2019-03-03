<?php

use Faker\Generator as Faker;

$factory->define(App\Comision::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->unique()->word,
        'cupo'=>$faker->numberBetween(20,40),
        'turno_id'=>$faker->randomElement(array(1,2,3)),
        'aula_id'=>$faker->numberBetween(1,50),
    ];
});
