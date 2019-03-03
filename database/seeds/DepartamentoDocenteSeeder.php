<?php
use App\DepartamentoDocente;
use Illuminate\Database\Seeder;

class DepartamentoDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DepartamentoDocente::class,200)->create();
    }
}
