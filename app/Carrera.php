<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function grupo(){
        return $this->hasMany('App\Grupo', 'id');
    }

    public function alumno(){
        return $this->hasMany('App\Alumno', 'id');
    }
}
