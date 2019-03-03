<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    public function estudiantes()
    {
        return $this->belongsToMany('Estudiante','estudiantes','estudiante_id')
            ->withPivot('fecha','presente');
    }

    public function docentes()
    {
        return $this->belongsToMany('Docente','docentes','docente_id')
            ->withPivot('fecha','presente');
    }
}
