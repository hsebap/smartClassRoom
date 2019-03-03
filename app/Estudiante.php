<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public function horarios()
    {
        return $this->belongsToMany('Horario','inscripciones','horario_id');
    }

    public function clases()
    {
        return $this->belongsToMany('Clase','clases','clase_id')
            ->withPivot('fecha','presente');
    }
}
