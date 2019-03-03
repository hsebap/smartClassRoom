<?php

use App\CarreraEstudiante;
use Illuminate\Database\Seeder;

class CarreraEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarreraEstudiante::class,200)->create();
    }

}
