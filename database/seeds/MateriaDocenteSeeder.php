<?php
use App\MateriaDocente;
use Illuminate\Database\Seeder;

class MateriaDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MateriaDocente::class,30)->create();
    }
}
