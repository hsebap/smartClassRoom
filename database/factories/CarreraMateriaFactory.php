<?php
use App\CarreraMateria;
use Faker\Generator as Faker;

$factory->define(CarreraMateria::class, function (Faker $faker) {
    return [
        'carrera_id'=>$faker->numberBetween(1,5),
        'materia_id'=>$faker->numberBetween(1,20),
    ];
});
