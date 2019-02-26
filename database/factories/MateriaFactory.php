<?php

use Faker\Generator as Faker;

$factory->define(App\Materia::class, function (Faker $faker) {
    return [
            'nombre'=>$faker->unique()->word,
            'nivel'=>$faker->randomElement(array(1,2,3,4,5,6)),
            'plan'=>$faker->randomElement(array('2018','1995','1998')),
            'regimen'=>$faker->randomElement(array('Anual','Cuatrimestral')),
            'departamento_id'=>$faker->randomElement(array(1,2,3,4,5,6)),
    ];
});
