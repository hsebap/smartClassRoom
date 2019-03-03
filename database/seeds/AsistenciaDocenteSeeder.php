<?php
use App\AsistenciaDocente;
use Illuminate\Database\Seeder;

class AsistenciaDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AsistenciaDocente::class,200)->create();
    }
}
