<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTables([
            'departamentos',
            'materias',
            'carreras'
        ]);

        $this->call(DepartamentoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(CarreraSeeder::class);
    }

    public function truncateTables(array $tables)
    {
       //disabled foreign key control
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        //Delete tables
        foreach ($tables as $table)
        {
            DB::table($table)->truncate();
        }
       //enable foreign key control
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
