<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fortaleza extends Model
{
    protected $fillable = [
        'numero_control',
        'fortalezas_1',
        'fortalezas_2',
        'fortalezas_3',
        'fortalezas_4'
    ];
}
