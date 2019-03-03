<?php

use Faker\Generator as Faker;

$factory->define(App\MateriaDocente::class, function (Faker $faker) {
    return [
        'materia_id'=>$faker->numberBetween(1,20),
        'docente_id'=>$faker->numberBetween(1,100),
        'cargo'=>$faker->randomElement(array('Titular','Auxiliar','Adjunto','Ayudante'))
    ];
});
