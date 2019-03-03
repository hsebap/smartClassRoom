<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function estudiantes()
    {
        return $this->belongsToMany('Estudiante','inscripciones','estudiante_id');
    }
}
