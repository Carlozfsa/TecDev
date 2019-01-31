<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{


    //
    protected $primaryKey = "numero_control";

    protected $fillable = [
        'numero_control', 'email', 'password',
    ];



    public function user(){
        return $this->belongsTo('App\User', 'numero_control');
    }

    public function grupo(){
        return $this->hasMany('App\Grupo', 'docente');
    }


}
