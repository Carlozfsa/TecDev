<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $fillable = ['file'];

//    protected $uploads = "/mapas";
//
//    public function getFileAttribute($file){
//        return $this->uploads.$file;
//    }
}
