<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'nombre'=> 'Sistemas de Informacion'
        ]);
        Departamento::create([
            'nombre'=> 'Electrónica'
        ]);
        Departamento::create([
            'nombre'=> 'Eléctrica'
        ]);
        Departamento::create([
            'nombre'=> 'Mecánica'
        ]);
        Departamento::create([
            'nombre'=> 'Civil'
        ]);
        Departamento::create([
            'nombre'=> 'Ciencias Básica'
        ]);
        //factory(Departamento::class,10)->create();
    }
}
