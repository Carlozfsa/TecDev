<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumno; // <-- NUEVO
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'numero_control' => 'required|integer|digits:8|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],
            ['required'=>'El :attribute es obligatorio',
            'email'=>'El :attribute debe de ser un correo electrónico',
            'integer'=>'El :attribute debe ser numérico',
            'digits'=>'El :attribute debe contener 8 caracteres',
            'email.unique'=>'El :attribute ya está registrado en la base de datos',
                'numero_control.unique'=>'El :attribute ya está registrado en la base de datos',
                'min'=>'La :attribute debe contener al menos 6 caracteres',
            'confirmed'=>'La :attribute no concuerda'
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /**return User::create([
            'email' => $data['email'],
            'numero_control' => $data['numero_control'],
            'password' => bcrypt($data['password']),
            'role_id'=>1,
        ]);   **/


        // -- NUEVO TUTORIAS 2 Y 3
        $us = User::create([
            'email' => $data['email'],
            'numero_control' => $data['numero_control'],
            'password' => bcrypt($data['password']),
            'role_id'=>1,
        ]);

        $us -> Alumno = Alumno::create([
            'numero_control' => $data['numero_control'],
        ]);

        return $us;

    }

    
}
