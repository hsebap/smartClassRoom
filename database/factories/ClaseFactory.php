<?php

use Faker\Generator as Faker;

$factory->define(App\Clase::class, function (Faker $faker) {
    return [
        'tipo'=>$faker->randomElement(array('Teorica','Practica')),
        'fecha'=>$faker->date(),
        'tema'=>$faker->sentence(5,true),
        'planificacion_id'=>$faker->numberBetween(1,10),
        'comision_id'=>$faker->numberBetween(1,30)
    ];
});
