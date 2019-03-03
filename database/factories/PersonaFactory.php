<?php

use Faker\Generator as Faker;

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
        'apellido'=>$faker->lastName(),
        'nombre'=>$faker->firstName(),
        'dni'=>$faker->unique()->randomNumber(),
        'fechaNacimiento'=>$faker->date(),
        ];
});
