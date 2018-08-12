<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foda extends Model
{
    //
    protected $fillable = [
        'user_id',
        'fortalezas',
        'oportunidades'
    ];
}
