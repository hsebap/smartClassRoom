<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function materias()
    {
        return $this->belongsToMany('Materia','carrera_materia','materia_id');
    }
}
