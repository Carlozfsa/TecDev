<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    //


    use SoftDeletes;

    public $incrementing = false;

    protected $primaryKey = "clave";

    protected $dates = ['deleted_at'];


    public function tutor(){
        return $this->belongsTo('App\Tutor', 'docente');
    }

    public function materia(){
        return $this->belongsTo('App\Materia', 'nivel');
    }

    public function carrera(){
        return $this->belongsTo('App\Carrera', 'car');
    }

    public function periodo(){
        return $this->belongsTo('App\Periodo', 'per');
    }

    public function grupo(){
        return $this->belongsTo('App\Tutor', 'docente');
    }

}
