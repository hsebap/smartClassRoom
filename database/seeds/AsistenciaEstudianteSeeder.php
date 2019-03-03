<?php
use App\AsistenciaEstudiante;
use Illuminate\Database\Seeder;

class AsistenciaEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AsistenciaEstudiante::class,300)->create();
    }
}
