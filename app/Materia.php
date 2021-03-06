<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function carreras()
    {
        return  $this->belongsToMany('Carrera','carrera_materia')
            ->withPivot('carrera_id');
    }

    public function docentes()
    {
        return $this->belongsToMany('Docente','docentes','docente_id')
            ->withPivot('fecha','presente');
    }
}
