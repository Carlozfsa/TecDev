<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    //

    public function create_grupos(){

        return view('admin.crear_grupos');
    }

    public function store_grupos(Request $request){

        return 'oks';
    }
}
