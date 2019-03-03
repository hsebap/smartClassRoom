<?php
use Faker\Generator as Faker;

$factory->define(App\Horario::class, function (Faker $faker) {
    return [
        'dia'=>$faker->dayOfWeek(),
        'horaInicio'=>$faker->time(),
        'horaFin'=>$faker->time(),
        'periodo'=>$faker->randomElement(array('Anual','1er Cuatrimestre', '2do Cuatrimestre')),
        'materia_id'=>$faker->numberBetween(1,20),
        'comision_id'=>$faker->numberBetween(1,60)
    ];
});
