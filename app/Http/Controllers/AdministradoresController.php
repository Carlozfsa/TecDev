<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Administrador;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministradoresController extends Controller
{
    //


    public function create_reg_admin()
    {
        $academias = Academia::pluck('nombre', 'id')->all();

        $ad = User::where('numero_control', Auth::user()->numero_control)->first();
        return view('admin.admin_reg', compact('academias', 'ad'));
    }

    public function guardar_admin(Request $request){

        $this->validate($request, [
            'nombres' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'academia' => 'required',
            'numero' => 'required|integer',
            'mail' => 'required|string|email|max:255',
            'password' => 'min:6|string|confirmed',
        ]);

        User::where('numero_control', Auth::user()->numero_control)->update([
            'numero_control' => $request->numero,
            'email' => $request->mail,
            'password' => bcrypt($request->password),
        ]);

        $t = Administrador::where('numero_control', Auth::user()->numero_control)->first();
        $t->numero_control = $request->numero;
        $t->nombres = $request->nombres;
        $t->apellidop = $request->apellidop;
        $t->apellidom = $request->apellidom;
        $t->academia = $request->academia;
        $t->academia = $request->academia;
        $t->save();

        return redirect('/login');
    }




}
