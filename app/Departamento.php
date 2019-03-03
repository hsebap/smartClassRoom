<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function docentes()
    {
        return $this->belongsToMany('Docente','docentes','docente_id');
    }
}
