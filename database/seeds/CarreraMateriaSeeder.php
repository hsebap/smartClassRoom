<?php
use App\CarreraMateria;
use Illuminate\Database\Seeder;

class CarreraMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarreraMateria::class,30)->create();
    }
}
