<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function clases()
    {
        return $this->belongsToMany('Clase','clases','clase_id')
            ->withPivot('fecha','presente');
    }

    public function materias()
    {
        return $this->belongsToMany('Materia','carrera_materia','materia_id');
    }

    public function departamentos()
    {
        return $this->belongsToMany('Departamento','departamentos_docentes','departamento_id');
    }
}
