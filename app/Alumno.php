<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //

    protected $primaryKey = "numero_control";  //NUEVO

    protected $fillable = [       //NUEVO
        'numero_control', 'nombres', 'apellidop', 'apellidom', 'carr', 'tut_nivel',
        'grupo_l', 'turn', 'grupo', 'sem', 'telcasa', 'cel', 'dir', 'nss',
        'ts', 'ec', 'trabajo', 'horas',
    ];


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
