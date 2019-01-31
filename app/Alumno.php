<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //

    protected $primaryKey = "numero_control";


    public function carrera(){
        return $this->belongsTo('App\Carrera', 'carr');
    }

    public function letra(){
        return $this->belongsTo('App\Letra', 'grupo_l');
    }

    public function turno(){
        return $this->belongsTo('App\Turno', 'turn');
    }

}
