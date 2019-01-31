<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;


    protected $primaryKey = "numero_control";

    protected $fillable = [
        'role_id','numero_control', 'email', 'password', 'is_active',
    ];

    protected $dates = ['deleted_at'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAlumno(){

        if($this->role->num_rol==1 && $this->is_active==1){
            return true;
        }
        return false;
    }

    public function isTutor(){

        if($this->role->num_rol==2 && $this->is_active==1){
            return true;
        }
        return false;
    }

    public function tutor(){
        return $this->hasOne('App\Tutor', 'numero_control');
    }

    public function alumno(){
        return $this->hasOne('App\Alumno', 'numero_control');
    }

    public function administrador(){
        return $this->hasOne('App\Administrador', 'numero_control');
    }

}
