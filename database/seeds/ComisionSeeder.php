<?php
use App\Comision;
use Illuminate\Database\Seeder;

class ComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comision::class,60)->create();
    }
}
