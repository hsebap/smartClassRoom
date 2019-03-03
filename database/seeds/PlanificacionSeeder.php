<?php
use App\Planificacion;
use Illuminate\Database\Seeder;

class PlanificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Planificacion::class,10)->create();
    }
}
