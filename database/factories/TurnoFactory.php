<?php

use Faker\Generator as Faker;

$factory->define(App\Turno::class, function (Faker $faker) {
    return [
         'nombre'=>$faker->unique()->randomElement(array('Mañana','Tarde','Noche')),
    ];
});
