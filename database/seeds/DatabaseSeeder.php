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
            'carreras',
            'carrera_materia',
            'turnos',
            'aulas',
            'recursos',
            'comisiones',
            'horarios',
            'personas',
            'estudiantes',
            'inscripciones',
            'domicilios',
            'carreras_estudiantes',
            'planificaciones',
            'clases',
            'asistencias_estudiantes',
            'docentes',
            'asistencias_docentes',
            'materias_docentes',
            'departamentos_docentes'
        ]);

        $this->call(DepartamentoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(CarreraMateriaSeeder::class);
        $this->call(TurnoSeeder::class);
        $this->call(AulaSeeder::class);
        $this->call(RecursoSeeder::class);
        $this->call(ComisionSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(InscripcionSeeder::class);
        $this->call(DomicilioSeeder::class);
        $this->call(CarreraEstudianteSeeder::class);
        $this->call(PlanificacionSeeder::class);
        $this->call(ClaseSeeder::class);
        $this->call(AsistenciaEstudianteSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AsistenciaDocenteSeeder::class);
        $this->call(MateriaDocenteSeeder::class);
        $this->call(DepartamentoDocenteSeeder::class);
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
