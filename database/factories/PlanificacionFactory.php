<?php

use Faker\Generator as Faker;

$factory->define(App\Planificacion::class, function (Faker $faker) {
    return [

    'periodo'=>$faker->randomElement(array('Anual','1er Cuatrimestre','2do Cuatrimestre')),
    'año'=>$faker->year(),
    'plan'=>$faker->randomElement(array('2008','1995')),
    'materia_id'=>$faker->numberBetween(1,20)
    ];
});
