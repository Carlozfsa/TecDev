<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materia extends Model
{
    //

    use SoftDeletes;

    protected $primaryKey = "id";

    protected $dates = ['deleted_at'];


    public function grupo(){
        return $this->hasMany('App\Grupo', 'id');
    }
}
