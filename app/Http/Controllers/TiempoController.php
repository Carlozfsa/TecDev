<?php

namespace App\Http\Controllers;

use App\Tiempo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiempoController extends Controller
{
    //

    public function create_l_t1()
    {
        return view('activities.2_administracion_del_tiempo.lecturas.lectura_1');
    }

    public function create_l_t2()
    {
            return view('activities.2_administracion_del_tiempo.lecturas.lectura_2');
    }

    public function create_l_t3()
    {
        return view('activities.2_administracion_del_tiempo.lecturas.lectura_3');
    }

    public function create_l_t4()
    {
        return view('activities.2_administracion_del_tiempo.lecturas.lectura_4');
    }


    public function create_t1()
    {

        if (Auth::User()->avance >= 2.11) {
            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_1');
        } else {
            return redirect()->back();
        }
    }


    public function create_t2()
    {

        if (Auth::User()->avance >= 2.12) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode = NULL;

            if (Tiempo::where('numero_control', 14021073)->exists() &&  $f->lunes_h1 != NULL &&  $f->lunes_h2 != NULL &&  $f->lunes_h3 != NULL &&  $f->lunes_h4 != NULL &&  $f->lunes_h5 != NULL &&  $f->lunes_h6 != NULL &&  $f->lunes_h7 != NULL &&  $f->lunes_h8 != NULL &&  $f->lunes_h9 != NULL &&  $f->lunes_h10 != NULL &&  $f->lunes_h11 != NULL &&  $f->lunes_h12 != NULL &&  $f->lunes_h13 != NULL) {
                $edit = 1;

                $f_decode1 = json_decode($f->lunes_h1);
                $f_decode2 = json_decode($f->lunes_h2);
                $f_decode3 = json_decode($f->lunes_h3);
                $f_decode4 = json_decode($f->lunes_h4);
                $f_decode5 = json_decode($f->lunes_h5);
                $f_decode6 = json_decode($f->lunes_h6);
                $f_decode7 = json_decode($f->lunes_h7);
                $f_decode8 = json_decode($f->lunes_h8);
                $f_decode9 = json_decode($f->lunes_h9);
                $f_decode10 = json_decode($f->lunes_h10);
                $f_decode11 = json_decode($f->lunes_h11);
                $f_decode12 = json_decode($f->lunes_h12);
                $f_decode13 = json_decode($f->lunes_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t3()
    {
        if (Auth::User()->avance >= 2.13) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_martes_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->martes_h1);
                $f_decode2 = json_decode($f->martes_h2);
                $f_decode3 = json_decode($f->martes_h3);
                $f_decode4 = json_decode($f->martes_h4);
                $f_decode5 = json_decode($f->martes_h5);
                $f_decode6 = json_decode($f->martes_h6);
                $f_decode7 = json_decode($f->martes_h7);
                $f_decode8 = json_decode($f->martes_h8);
                $f_decode9 = json_decode($f->martes_h9);
                $f_decode10 = json_decode($f->martes_h10);
                $f_decode11 = json_decode($f->martes_h11);
                $f_decode12 = json_decode($f->martes_h12);
                $f_decode13 = json_decode($f->martes_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_3', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t4()
    {
        if (Auth::User()->avance >= 2.14) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_miercoles_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->miercoles_h1);
                $f_decode2 = json_decode($f->miercoles_h2);
                $f_decode3 = json_decode($f->miercoles_h3);
                $f_decode4 = json_decode($f->miercoles_h4);
                $f_decode5 = json_decode($f->miercoles_h5);
                $f_decode6 = json_decode($f->miercoles_h6);
                $f_decode7 = json_decode($f->miercoles_h7);
                $f_decode8 = json_decode($f->miercoles_h8);
                $f_decode9 = json_decode($f->miercoles_h9);
                $f_decode10 = json_decode($f->miercoles_h10);
                $f_decode11 = json_decode($f->miercoles_h11);
                $f_decode12 = json_decode($f->miercoles_h12);
                $f_decode13 = json_decode($f->miercoles_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_4', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t5()
    {
        if (Auth::User()->avance >= 2.15) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_jueves_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->jueves_h1);
                $f_decode2 = json_decode($f->jueves_h2);
                $f_decode3 = json_decode($f->jueves_h3);
                $f_decode4 = json_decode($f->jueves_h4);
                $f_decode5 = json_decode($f->jueves_h5);
                $f_decode6 = json_decode($f->jueves_h6);
                $f_decode7 = json_decode($f->jueves_h7);
                $f_decode8 = json_decode($f->jueves_h8);
                $f_decode9 = json_decode($f->jueves_h9);
                $f_decode10 = json_decode($f->jueves_h10);
                $f_decode11 = json_decode($f->jueves_h11);
                $f_decode12 = json_decode($f->jueves_h12);
                $f_decode13 = json_decode($f->jueves_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_5', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t6()
    {
        if (Auth::User()->avance >= 2.16) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_viernes_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->viernes_h1);
                $f_decode2 = json_decode($f->viernes_h2);
                $f_decode3 = json_decode($f->viernes_h3);
                $f_decode4 = json_decode($f->viernes_h4);
                $f_decode5 = json_decode($f->viernes_h5);
                $f_decode6 = json_decode($f->viernes_h6);
                $f_decode7 = json_decode($f->viernes_h7);
                $f_decode8 = json_decode($f->viernes_h8);
                $f_decode9 = json_decode($f->viernes_h9);
                $f_decode10 = json_decode($f->viernes_h10);
                $f_decode11 = json_decode($f->viernes_h11);
                $f_decode12 = json_decode($f->viernes_h12);
                $f_decode13 = json_decode($f->viernes_h13);

            } else {
                $edit = 0;
            }

            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_6', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t7()
    {
        if (Auth::User()->avance >= 2.17) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_sabado_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sabado_h1);
                $f_decode2 = json_decode($f->sabado_h2);
                $f_decode3 = json_decode($f->sabado_h3);
                $f_decode4 = json_decode($f->sabado_h4);
                $f_decode5 = json_decode($f->sabado_h5);
                $f_decode6 = json_decode($f->sabado_h6);
                $f_decode7 = json_decode($f->sabado_h7);
                $f_decode8 = json_decode($f->sabado_h8);
                $f_decode9 = json_decode($f->sabado_h9);
                $f_decode10 = json_decode($f->sabado_h10);
                $f_decode11 = json_decode($f->sabado_h11);
                $f_decode12 = json_decode($f->sabado_h12);
                $f_decode13 = json_decode($f->sabado_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_7', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t8()
    {
        if (Auth::User()->avance >= 2.18) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_domingo_1 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->domingo_h1);
                $f_decode2 = json_decode($f->domingo_h2);
                $f_decode3 = json_decode($f->domingo_h3);
                $f_decode4 = json_decode($f->domingo_h4);
                $f_decode5 = json_decode($f->domingo_h5);
                $f_decode6 = json_decode($f->domingo_h6);
                $f_decode7 = json_decode($f->domingo_h7);
                $f_decode8 = json_decode($f->domingo_h8);
                $f_decode9 = json_decode($f->domingo_h9);
                $f_decode10 = json_decode($f->domingo_h10);
                $f_decode11 = json_decode($f->domingo_h11);
                $f_decode12 = json_decode($f->domingo_h12);
                $f_decode13 = json_decode($f->domingo_h13);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_8', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8', 'f_decode9', 'f_decode10', 'f_decode11', 'f_decode12', 'f_decode13'));
        } else {
            return redirect()->back();
        }
    }

    public function create_tf()
    {
        if (Auth::User()->avance >= 2.19) {
            return view('activities.2_administracion_del_tiempo.ejercicios.ejercicio_f');
        } else {
            return redirect()->back();
        }
    }


    public function create_t2_1()
    {
        if (Auth::User()->avance >= 2.21) {
            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_1');
        } else {
            return redirect()->back();
        }
    }

    public function create_t2_2()
    {
        if (Auth::User()->avance >= 2.22) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode = NULL;

            if ($f->avance_lunes_2) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_1);
                $f_decode2 = json_decode($f->comida_1);
                $f_decode3 = json_decode($f->clase_1);
                $f_decode4 = json_decode($f->estudio_1);
                $f_decode5 = json_decode($f->rel_1);
                $f_decode6 = json_decode($f->soc_1);
                $f_decode7 = json_decode($f->dep_1);
                $f_decode8 = json_decode($f->per_1);

                return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_2', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));

            } else {
                $edit = 0;
                return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_2', compact('edit'));

            }

            } else {
            return redirect()->back();
        }
    }

    public function create_t2_3()
    {
        if (Auth::User()->avance >= 2.23) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_martes_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_2);
                $f_decode2 = json_decode($f->comida_2);
                $f_decode3 = json_decode($f->clase_2);
                $f_decode4 = json_decode($f->estudio_2);
                $f_decode5 = json_decode($f->rel_2);
                $f_decode6 = json_decode($f->soc_2);
                $f_decode7 = json_decode($f->dep_2);
                $f_decode8 = json_decode($f->per_2);

            } else {
                $edit = 0;
            }

            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_3', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect();
        }
    }

    public function create_t2_4()
    {
        if (Auth::User()->avance >= 2.24) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_miercoles_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_3);
                $f_decode2 = json_decode($f->comida_3);
                $f_decode3 = json_decode($f->clase_3);
                $f_decode4 = json_decode($f->estudio_3);
                $f_decode5 = json_decode($f->rel_3);
                $f_decode6 = json_decode($f->soc_3);
                $f_decode7 = json_decode($f->dep_3);
                $f_decode8 = json_decode($f->per_3);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_4', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t2_5()
    {
        if (Auth::User()->avance >= 2.25) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_jueves_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_4);
                $f_decode2 = json_decode($f->comida_4);
                $f_decode3 = json_decode($f->clase_4);
                $f_decode4 = json_decode($f->estudio_4);
                $f_decode5 = json_decode($f->rel_4);
                $f_decode6 = json_decode($f->soc_4);
                $f_decode7 = json_decode($f->dep_4);
                $f_decode8 = json_decode($f->per_4);

            } else {
                $edit = 0;
            }

            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_5', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t2_6()
    {
        if (Auth::User()->avance >= 2.26) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_viernes_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_5);
                $f_decode2 = json_decode($f->comida_5);
                $f_decode3 = json_decode($f->clase_5);
                $f_decode4 = json_decode($f->estudio_5);
                $f_decode5 = json_decode($f->rel_5);
                $f_decode6 = json_decode($f->soc_5);
                $f_decode7 = json_decode($f->dep_5);
                $f_decode8 = json_decode($f->per_5);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_6', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t2_7()
    {
        if (Auth::User()->avance >= 2.27) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_sabado_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_6);
                $f_decode2 = json_decode($f->comida_6);
                $f_decode3 = json_decode($f->clase_6);
                $f_decode4 = json_decode($f->estudio_6);
                $f_decode5 = json_decode($f->rel_6);
                $f_decode6 = json_decode($f->soc_6);
                $f_decode7 = json_decode($f->dep_6);
                $f_decode8 = json_decode($f->per_6);

            } else {
                $edit = 0;
            }


            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_7', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect()->back();
        }
    }

    public function create_t2_8()
    {
        if (Auth::User()->avance >= 2.28) {

            $edit = NULL;

            $f = Tiempo::where('numero_control', 14021073)->first();
            $f_decode1 = NULL;

            if ($f->avance_domingo_2 > 0) {
                $edit = 1;

                $f_decode1 = json_decode($f->sueno_7);
                $f_decode2 = json_decode($f->comida_7);
                $f_decode3 = json_decode($f->clase_7);
                $f_decode4 = json_decode($f->estudio_7);
                $f_decode5 = json_decode($f->rel_7);
                $f_decode6 = json_decode($f->soc_7);
                $f_decode7 = json_decode($f->dep_7);
                $f_decode8 = json_decode($f->per_7);

            } else {
                $edit = 0;
            }

            return view('activities.2_administracion_del_tiempo.ejercicios.t_2.ejercicio_8', compact('edit', 'f_decode1', 'f_decode2', 'f_decode3', 'f_decode4', 'f_decode5', 'f_decode6', 'f_decode7', 'f_decode8'));
        } else {
            return redirect()->back();
        }
    }


    public function store_t1_2(Request $request)
    {

        //********Hora 1********
        $lun_h1 = array();
        $lun_h1_i = 1;
        $lun_h1_k = 0;

        while ($lun_h1_i <= count($request->l1)) {
            $lun_h1[$lun_h1_i] = $request->l1[$lun_h1_k];
            $lun_h1_i++;
            $lun_h1_k++;
        }
        $lun_h1_output = json_encode($lun_h1);

        //********Hora 2********
        $lun_h2 = array();
        $lun_h2_i = 1;
        $lun_h2_k = 0;

        while ($lun_h2_i <= count($request->l2)) {
            $lun_h2[$lun_h2_i] = $request->l2[$lun_h2_k];
            $lun_h2_i++;
            $lun_h2_k++;
        }
        $lun_h2_output = json_encode($lun_h2);

        //********Hora 3********
        $lun_h3 = array();
        $lun_h3_i = 1;
        $lun_h3_k = 0;

        while ($lun_h3_i <= count($request->l3)) {
            $lun_h3[$lun_h3_i] = $request->l3[$lun_h3_k];
            $lun_h3_i++;
            $lun_h3_k++;
        }
        $lun_h3_output = json_encode($lun_h3);

        //********Hora 4********
        $lun_h4 = array();
        $lun_h4_i = 1;
        $lun_h4_k = 0;

        while ($lun_h4_i <= count($request->l4)) {
            $lun_h4[$lun_h4_i] = $request->l4[$lun_h4_k];
            $lun_h4_i++;
            $lun_h4_k++;
        }
        $lun_h4_output = json_encode($lun_h4);

        //********Hora 5********
        $lun_h5 = array();
        $lun_h5_i = 1;
        $lun_h5_k = 0;

        while ($lun_h5_i <= count($request->l5)) {
            $lun_h5[$lun_h5_i] = $request->l5[$lun_h5_k];
            $lun_h5_i++;
            $lun_h5_k++;
        }
        $lun_h5_output = json_encode($lun_h5);

        //********Hora 6********
        $lun_h6 = array();
        $lun_h6_i = 1;
        $lun_h6_k = 0;

        while ($lun_h6_i <= count($request->l6)) {
            $lun_h6[$lun_h6_i] = $request->l6[$lun_h6_k];
            $lun_h6_i++;
            $lun_h6_k++;
        }
        $lun_h6_output = json_encode($lun_h6);

        //********Hora 7********
        $lun_h7 = array();
        $lun_h7_i = 1;
        $lun_h7_k = 0;

        while ($lun_h7_i <= count($request->l7)) {
            $lun_h7[$lun_h7_i] = $request->l7[$lun_h7_k];
            $lun_h7_i++;
            $lun_h7_k++;
        }
        $lun_h7_output = json_encode($lun_h7);

        //********Hora 8********
        $lun_h8 = array();
        $lun_h8_i = 1;
        $lun_h8_k = 0;

        while ($lun_h8_i <= count($request->l8)) {
            $lun_h8[$lun_h8_i] = $request->l8[$lun_h8_k];
            $lun_h8_i++;
            $lun_h8_k++;
        }
        $lun_h8_output = json_encode($lun_h8);

        //********Hora 9********
        $lun_h9 = array();
        $lun_h9_i = 1;
        $lun_h9_k = 0;

        while ($lun_h9_i <= count($request->l9)) {
            $lun_h9[$lun_h9_i] = $request->l9[$lun_h9_k];
            $lun_h9_i++;
            $lun_h9_k++;
        }
        $lun_h9_output = json_encode($lun_h9);

        //********Hora 10********
        $lun_h10 = array();
        $lun_h10_i = 1;
        $lun_h10_k = 0;

        while ($lun_h10_i <= count($request->l10)) {
            $lun_h10[$lun_h10_i] = $request->l10[$lun_h10_k];
            $lun_h10_i++;
            $lun_h10_k++;
        }
        $lun_h10_output = json_encode($lun_h10);

        //********Hora 11********
        $lun_h11 = array();
        $lun_h11_i = 1;
        $lun_h11_k = 0;

        while ($lun_h11_i <= count($request->l11)) {
            $lun_h11[$lun_h11_i] = $request->l11[$lun_h11_k];
            $lun_h11_i++;
            $lun_h11_k++;
        }
        $lun_h11_output = json_encode($lun_h11);

        //********Hora 12********
        $lun_h12 = array();
        $lun_h12_i = 1;
        $lun_h12_k = 0;

        while ($lun_h12_i <= count($request->l13)) {
            $lun_h12[$lun_h12_i] = $request->l13[$lun_h12_k];
            $lun_h12_i++;
            $lun_h12_k++;
        }
        $lun_h12_output = json_encode($lun_h12);

        //********Hora 13********
        $lun_h13 = array();
        $lun_h13_i = 1;
        $lun_h13_k = 0;

        while ($lun_h13_i <= count($request->l14)) {
            $lun_h13[$lun_h13_i] = $request->l14[$lun_h13_k];
            $lun_h13_i++;
            $lun_h13_k++;
        }
        $lun_h13_output = json_encode($lun_h13);

        if(Tiempo::where('numero_control', Auth::user()->numero_control)->exists()){

            $lunes_h1 = Tiempo::where('numero_control', Auth::user()->numero_control)->first();
            $lunes_h1->numero_control = 14021073;
            $lunes_h1->lunes_h1 = $lun_h1_output;
            $lunes_h1->lunes_h2 = $lun_h2_output;
            $lunes_h1->lunes_h3 = $lun_h3_output;
            $lunes_h1->lunes_h4 = $lun_h4_output;
            $lunes_h1->lunes_h5 = $lun_h5_output;
            $lunes_h1->lunes_h6 = $lun_h6_output;
            $lunes_h1->lunes_h7 = $lun_h7_output;
            $lunes_h1->lunes_h8 = $lun_h8_output;
            $lunes_h1->lunes_h9 = $lun_h9_output;
            $lunes_h1->lunes_h10 = $lun_h10_output;
            $lunes_h1->lunes_h11 = $lun_h11_output;
            $lunes_h1->lunes_h12 = $lun_h12_output;
            $lunes_h1->lunes_h13 = $lun_h13_output;

            $lunes_h1->save();

            $u = User::where('numero_control', 14021073)->first();
            $u->avance = 2.13;
            $u->save();

        }else{
            $lunes_h1 = new Tiempo();
            $lunes_h1->numero_control = 14021073;
            $lunes_h1->lunes_h1 = $lun_h1_output;
            $lunes_h1->lunes_h2 = $lun_h2_output;
            $lunes_h1->lunes_h3 = $lun_h3_output;
            $lunes_h1->lunes_h4 = $lun_h4_output;
            $lunes_h1->lunes_h5 = $lun_h5_output;
            $lunes_h1->lunes_h6 = $lun_h6_output;
            $lunes_h1->lunes_h7 = $lun_h7_output;
            $lunes_h1->lunes_h8 = $lun_h8_output;
            $lunes_h1->lunes_h9 = $lun_h9_output;
            $lunes_h1->lunes_h10 = $lun_h10_output;
            $lunes_h1->lunes_h11 = $lun_h11_output;
            $lunes_h1->lunes_h12 = $lun_h12_output;
            $lunes_h1->lunes_h13 = $lun_h13_output;

            $lunes_h1->avance_lunes_1 = 1;


            $lunes_h1->save();

            $u = User::where('numero_control', 14021073)->first();
            $u->avance = 2.13;
            $u->save();

        }



        return redirect('tiempo_ej_2');
    }

    public function store_t1_3(Request $request)
    {

        //********Hora 1********
        $mar_h1 = array();
        $mar_h1_i = 1;
        $mar_h1_k = 0;

        while ($mar_h1_i <= count($request->m1)) {
            $mar_h1[$mar_h1_i] = $request->m1[$mar_h1_k];
            $mar_h1_i++;
            $mar_h1_k++;
        }
        $mar_h1_output = json_encode($mar_h1);


        //********Hora 2********
        $mar_h2 = array();
        $mar_h2_i = 1;
        $mar_h2_k = 0;

        while ($mar_h2_i <= count($request->m2)) {
            $mar_h2[$mar_h2_i] = $request->m2[$mar_h2_k];
            $mar_h2_i++;
            $mar_h2_k++;
        }
        $mar_h2_output = json_encode($mar_h2);


        //********Hora 3********
        $mar_h3 = array();
        $mar_h3_i = 1;
        $mar_h3_k = 0;

        while ($mar_h3_i <= count($request->m3)) {
            $mar_h3[$mar_h3_i] = $request->m3[$mar_h3_k];
            $mar_h3_i++;
            $mar_h3_k++;
        }
        $mar_h3_output = json_encode($mar_h3);

        //********Hora 4********
        $mar_h4 = array();
        $mar_h4_i = 1;
        $mar_h4_k = 0;

        while ($mar_h4_i <= count($request->m4)) {
            $mar_h4[$mar_h4_i] = $request->m4[$mar_h4_k];
            $mar_h4_i++;
            $mar_h4_k++;
        }
        $mar_h4_output = json_encode($mar_h4);

        //********Hora 5********
        $mar_h5 = array();
        $mar_h5_i = 1;
        $mar_h5_k = 0;

        while ($mar_h5_i <= count($request->m5)) {
            $mar_h5[$mar_h5_i] = $request->m5[$mar_h5_k];
            $mar_h5_i++;
            $mar_h5_k++;
        }
        $mar_h5_output = json_encode($mar_h5);

        //********Hora 6********
        $mar_h6 = array();
        $mar_h6_i = 1;
        $mar_h6_k = 0;

        while ($mar_h6_i <= count($request->m6)) {
            $mar_h6[$mar_h6_i] = $request->m6[$mar_h6_k];
            $mar_h6_i++;
            $mar_h6_k++;
        }
        $mar_h6_output = json_encode($mar_h6);

        //********Hora 7********
        $mar_h7 = array();
        $mar_h7_i = 1;
        $mar_h7_k = 0;

        while ($mar_h7_i <= count($request->m7)) {
            $mar_h7[$mar_h7_i] = $request->m7[$mar_h7_k];
            $mar_h7_i++;
            $mar_h7_k++;
        }
        $mar_h7_output = json_encode($mar_h7);

        //********Hora 8********
        $mar_h8 = array();
        $mar_h8_i = 1;
        $mar_h8_k = 0;

        while ($mar_h8_i <= count($request->m8)) {
            $mar_h8[$mar_h8_i] = $request->m8[$mar_h8_k];
            $mar_h8_i++;
            $mar_h8_k++;
        }
        $mar_h8_output = json_encode($mar_h8);

        //********Hora 9********
        $mar_h9 = array();
        $mar_h9_i = 1;
        $mar_h9_k = 0;

        while ($mar_h9_i <= count($request->m9)) {
            $mar_h9[$mar_h9_i] = $request->m9[$mar_h9_k];
            $mar_h9_i++;
            $mar_h9_k++;
        }
        $mar_h9_output = json_encode($mar_h9);

        //********Hora 10********
        $mar_h10 = array();
        $mar_h10_i = 1;
        $mar_h10_k = 0;

        while ($mar_h10_i <= count($request->m10)) {
            $mar_h10[$mar_h10_i] = $request->m10[$mar_h10_k];
            $mar_h10_i++;
            $mar_h10_k++;
        }
        $mar_h10_output = json_encode($mar_h10);


        //********Hora 11********
        $mar_h11 = array();
        $mar_h11_i = 1;
        $mar_h11_k = 0;

        while ($mar_h11_i <= count($request->m11)) {
            $mar_h11[$mar_h11_i] = $request->m11[$mar_h11_k];
            $mar_h11_i++;
            $mar_h11_k++;
        }
        $mar_h11_output = json_encode($mar_h11);

        //********Hora 12********
        $mar_h12 = array();
        $mar_h12_i = 1;
        $mar_h12_k = 0;

        while ($mar_h12_i <= count($request->m13)) {
            $mar_h12[$mar_h12_i] = $request->m13[$mar_h12_k];
            $mar_h12_i++;
            $mar_h12_k++;
        }
        $mar_h12_output = json_encode($mar_h12);

        //********Hora 13********
        $mar_h13 = array();
        $mar_h13_i = 1;
        $mar_h13_k = 0;

        while ($mar_h13_i <= count($request->m14)) {
            $mar_h13[$mar_h13_i] = $request->m14[$mar_h13_k];
            $mar_h13_i++;
            $mar_h13_k++;
        }
        $mar_h13_output = json_encode($mar_h13);

        $martes_h1 = Tiempo::where('numero_control', 14021073)->first();
        $martes_h1->martes_h1 = $mar_h1_output;
        $martes_h1->martes_h2 = $mar_h2_output;
        $martes_h1->martes_h3 = $mar_h3_output;
        $martes_h1->martes_h4 = $mar_h4_output;
        $martes_h1->martes_h5 = $mar_h5_output;
        $martes_h1->martes_h6 = $mar_h6_output;
        $martes_h1->martes_h7 = $mar_h7_output;
        $martes_h1->martes_h8 = $mar_h8_output;
        $martes_h1->martes_h9 = $mar_h9_output;
        $martes_h1->martes_h10 = $mar_h10_output;
        $martes_h1->martes_h11 = $mar_h11_output;
        $martes_h1->martes_h12 = $mar_h12_output;
        $martes_h1->martes_h13 = $mar_h13_output;

        $martes_h1->avance_martes_1 = 1;


        $martes_h1->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.14;
        $u->save();

        return redirect('tiempo_ej_3');

    }

    public function store_t1_4(Request $request)
    {

        //********Hora 1********
        $mier_h1 = array();
        $mier_h1_i = 1;
        $mier_h1_k = 0;

        while ($mier_h1_i <= count($request->mi1)) {
            $mier_h1[$mier_h1_i] = $request->mi1[$mier_h1_k];
            $mier_h1_i++;
            $mier_h1_k++;
        }
        $mier_h1_output = json_encode($mier_h1);

        //********Hora 2********
        $mier_h2 = array();
        $mier_h2_i = 1;
        $mier_h2_k = 0;

        while ($mier_h2_i <= count($request->mi2)) {
            $mier_h2[$mier_h2_i] = $request->mi2[$mier_h2_k];
            $mier_h2_i++;
            $mier_h2_k++;
        }
        $mier_h2_output = json_encode($mier_h2);

        //********Hora 3********
        $mier_h3 = array();
        $mier_h3_i = 1;
        $mier_h3_k = 0;

        while ($mier_h3_i <= count($request->mi3)) {
            $mier_h3[$mier_h3_i] = $request->mi3[$mier_h3_k];
            $mier_h3_i++;
            $mier_h3_k++;
        }
        $mier_h3_output = json_encode($mier_h3);

        //********Hora 4********
        $mier_h4 = array();
        $mier_h4_i = 1;
        $mier_h4_k = 0;

        while ($mier_h4_i <= count($request->mi4)) {
            $mier_h4[$mier_h4_i] = $request->mi4[$mier_h4_k];
            $mier_h4_i++;
            $mier_h4_k++;
        }
        $mier_h4_output = json_encode($mier_h4);

        //********Hora 5********
        $mier_h5 = array();
        $mier_h5_i = 1;
        $mier_h5_k = 0;

        while ($mier_h5_i <= count($request->mi5)) {
            $mier_h5[$mier_h5_i] = $request->mi5[$mier_h5_k];
            $mier_h5_i++;
            $mier_h5_k++;
        }
        $mier_h5_output = json_encode($mier_h5);


        //********Hora 6********
        $mier_h6 = array();
        $mier_h6_i = 1;
        $mier_h6_k = 0;

        while ($mier_h6_i <= count($request->mi6)) {
            $mier_h6[$mier_h6_i] = $request->mi6[$mier_h6_k];
            $mier_h6_i++;
            $mier_h6_k++;
        }
        $mier_h6_output = json_encode($mier_h6);

        //********Hora 7********
        $mier_h7 = array();
        $mier_h7_i = 1;
        $mier_h7_k = 0;

        while ($mier_h7_i <= count($request->mi7)) {
            $mier_h7[$mier_h7_i] = $request->mi7[$mier_h7_k];
            $mier_h7_i++;
            $mier_h7_k++;
        }
        $mier_h7_output = json_encode($mier_h7);

        //********Hora 8********
        $mier_h8 = array();
        $mier_h8_i = 1;
        $mier_h8_k = 0;

        while ($mier_h8_i <= count($request->mi8)) {
            $mier_h8[$mier_h8_i] = $request->mi8[$mier_h8_k];
            $mier_h8_i++;
            $mier_h8_k++;
        }
        $mier_h8_output = json_encode($mier_h8);


        //********Hora 9********
        $mier_h9 = array();
        $mier_h9_i = 1;
        $mier_h9_k = 0;

        while ($mier_h9_i <= count($request->mi9)) {
            $mier_h9[$mier_h9_i] = $request->mi9[$mier_h9_k];
            $mier_h9_i++;
            $mier_h9_k++;
        }
        $mier_h9_output = json_encode($mier_h9);

        //********Hora 10********
        $mier_h10 = array();
        $mier_h10_i = 1;
        $mier_h10_k = 0;

        while ($mier_h10_i <= count($request->mi10)) {
            $mier_h10[$mier_h10_i] = $request->mi10[$mier_h10_k];
            $mier_h10_i++;
            $mier_h10_k++;
        }
        $mier_h10_output = json_encode($mier_h10);

        //********Hora 11********
        $mier_h11 = array();
        $mier_h11_i = 1;
        $mier_h11_k = 0;

        while ($mier_h11_i <= count($request->mi11)) {
            $mier_h11[$mier_h11_i] = $request->mi11[$mier_h11_k];
            $mier_h11_i++;
            $mier_h11_k++;
        }
        $mier_h11_output = json_encode($mier_h11);

        //********Hora 12********
        $mier_h12 = array();
        $mier_h12_i = 1;
        $mier_h12_k = 0;

        while ($mier_h12_i <= count($request->mi13)) {
            $mier_h12[$mier_h12_i] = $request->mi13[$mier_h12_k];
            $mier_h12_i++;
            $mier_h12_k++;
        }
        $mier_h12_output = json_encode($mier_h12);

        //********Hora 13********
        $mier_h13 = array();
        $mier_h13_i = 1;
        $mier_h13_k = 0;

        while ($mier_h13_i <= count($request->mi14)) {
            $mier_h13[$mier_h13_i] = $request->mi14[$mier_h13_k];
            $mier_h13_i++;
            $mier_h13_k++;
        }
        $mier_h13_output = json_encode($mier_h13);

        $miercoles_h1 = Tiempo::where('numero_control', 14021073)->first();
        $miercoles_h1->miercoles_h1 = $mier_h1_output;
        $miercoles_h1->miercoles_h2 = $mier_h2_output;
        $miercoles_h1->miercoles_h3 = $mier_h3_output;
        $miercoles_h1->miercoles_h4 = $mier_h4_output;
        $miercoles_h1->miercoles_h5 = $mier_h5_output;
        $miercoles_h1->miercoles_h6 = $mier_h6_output;
        $miercoles_h1->miercoles_h7 = $mier_h7_output;
        $miercoles_h1->miercoles_h8 = $mier_h8_output;
        $miercoles_h1->miercoles_h9 = $mier_h9_output;
        $miercoles_h1->miercoles_h10 = $mier_h10_output;
        $miercoles_h1->miercoles_h11 = $mier_h11_output;
        $miercoles_h1->miercoles_h12 = $mier_h12_output;
        $miercoles_h1->miercoles_h13 = $mier_h13_output;
        $miercoles_h1->avance_miercoles_1 = 1;

        $miercoles_h1->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.15;
        $u->save();

        return redirect('tiempo_ej_4');


    }

    public function store_t1_5(Request $request)
    {

        //********Hora 1********
        $jue_h1 = array();
        $jue_h1_i = 1;
        $jue_h1_k = 0;

        while ($jue_h1_i <= count($request->j1)) {
            $jue_h1[$jue_h1_i] = $request->j1[$jue_h1_k];
            $jue_h1_i++;
            $jue_h1_k++;
        }
        $jue_h1_output = json_encode($jue_h1);

        //********Hora 2********
        $jue_h2 = array();
        $jue_h2_i = 1;
        $jue_h2_k = 0;

        while ($jue_h2_i <= count($request->j2)) {
            $jue_h2[$jue_h2_i] = $request->j2[$jue_h2_k];
            $jue_h2_i++;
            $jue_h2_k++;
        }
        $jue_h2_output = json_encode($jue_h2);

        //********Hora 3********
        $jue_h3 = array();
        $jue_h3_i = 1;
        $jue_h3_k = 0;

        while ($jue_h3_i <= count($request->j3)) {
            $jue_h3[$jue_h3_i] = $request->j3[$jue_h3_k];
            $jue_h3_i++;
            $jue_h3_k++;
        }
        $jue_h3_output = json_encode($jue_h3);

        //********Hora 4********
        $jue_h4 = array();
        $jue_h4_i = 1;
        $jue_h4_k = 0;

        while ($jue_h4_i <= count($request->j4)) {
            $jue_h4[$jue_h4_i] = $request->j4[$jue_h4_k];
            $jue_h4_i++;
            $jue_h4_k++;
        }
        $jue_h4_output = json_encode($jue_h4);

        //********Hora 5********
        $jue_h5 = array();
        $jue_h5_i = 1;
        $jue_h5_k = 0;

        while ($jue_h5_i <= count($request->j5)) {
            $jue_h5[$jue_h5_i] = $request->j5[$jue_h5_k];
            $jue_h5_i++;
            $jue_h5_k++;
        }
        $jue_h5_output = json_encode($jue_h5);

        //********Hora 6********
        $jue_h6 = array();
        $jue_h6_i = 1;
        $jue_h6_k = 0;

        while ($jue_h6_i <= count($request->j6)) {
            $jue_h6[$jue_h6_i] = $request->j6[$jue_h6_k];
            $jue_h6_i++;
            $jue_h6_k++;
        }
        $jue_h6_output = json_encode($jue_h6);

        //********Hora 7********
        $jue_h7 = array();
        $jue_h7_i = 1;
        $jue_h7_k = 0;

        while ($jue_h7_i <= count($request->j7)) {
            $jue_h7[$jue_h7_i] = $request->j7[$jue_h7_k];
            $jue_h7_i++;
            $jue_h7_k++;
        }
        $jue_h7_output = json_encode($jue_h7);

        //********Hora 8********
        $jue_h8 = array();
        $jue_h8_i = 1;
        $jue_h8_k = 0;

        while ($jue_h8_i <= count($request->j8)) {
            $jue_h8[$jue_h8_i] = $request->j8[$jue_h8_k];
            $jue_h8_i++;
            $jue_h8_k++;
        }
        $jue_h8_output = json_encode($jue_h8);

        //********Hora 9********
        $jue_h9 = array();
        $jue_h9_i = 1;
        $jue_h9_k = 0;

        while ($jue_h9_i <= count($request->j9)) {
            $jue_h9[$jue_h9_i] = $request->j9[$jue_h9_k];
            $jue_h9_i++;
            $jue_h9_k++;
        }
        $jue_h9_output = json_encode($jue_h9);

        //********Hora 10********
        $jue_h10 = array();
        $jue_h10_i = 1;
        $jue_h10_k = 0;

        while ($jue_h10_i <= count($request->j10)) {
            $jue_h10[$jue_h10_i] = $request->j10[$jue_h10_k];
            $jue_h10_i++;
            $jue_h10_k++;
        }
        $jue_h10_output = json_encode($jue_h10);

        //********Hora 11********
        $jue_h11 = array();
        $jue_h11_i = 1;
        $jue_h11_k = 0;

        while ($jue_h11_i <= count($request->j11)) {
            $jue_h11[$jue_h11_i] = $request->j11[$jue_h11_k];
            $jue_h11_i++;
            $jue_h11_k++;
        }
        $jue_h11_output = json_encode($jue_h11);

        //********Hora 12********
        $jue_h12 = array();
        $jue_h12_i = 1;
        $jue_h12_k = 0;

        while ($jue_h12_i <= count($request->j13)) {
            $jue_h12[$jue_h12_i] = $request->j13[$jue_h12_k];
            $jue_h12_i++;
            $jue_h12_k++;
        }
        $jue_h12_output = json_encode($jue_h12);

        //********Hora 13********
        $jue_h13 = array();
        $jue_h13_i = 1;

        $jue_h13_k = 0;

        while ($jue_h13_i <= count($request->j14)) {
            $jue_h13[$jue_h13_i] = $request->j14[$jue_h13_k];
            $jue_h13_i++;
            $jue_h13_k++;
        }
        $jue_h13_output = json_encode($jue_h13);

        $jueves_h1 = Tiempo::where('numero_control', 14021073)->first();
        $jueves_h1->jueves_h1 = $jue_h1_output;
        $jueves_h1->jueves_h2 = $jue_h2_output;
        $jueves_h1->jueves_h3 = $jue_h3_output;
        $jueves_h1->jueves_h4 = $jue_h4_output;
        $jueves_h1->jueves_h5 = $jue_h5_output;
        $jueves_h1->jueves_h6 = $jue_h6_output;
        $jueves_h1->jueves_h7 = $jue_h7_output;
        $jueves_h1->jueves_h8 = $jue_h8_output;
        $jueves_h1->jueves_h9 = $jue_h9_output;
        $jueves_h1->jueves_h10 = $jue_h10_output;
        $jueves_h1->jueves_h11 = $jue_h11_output;
        $jueves_h1->jueves_h12 = $jue_h12_output;
        $jueves_h1->jueves_h13 = $jue_h13_output;
        $jueves_h1->avance_jueves_1 = 1;

        $jueves_h1->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.16;
        $u->save();

        return redirect('tiempo_ej_5');
    }

    public function store_t1_6(Request $request)
    {

        //********Hora 1********
        $vie_h1 = array();
        $vie_h1_i = 1;
        $vie_h1_k = 0;

        while ($vie_h1_i <= count($request->v1)) {
            $vie_h1[$vie_h1_i] = $request->v1[$vie_h1_k];
            $vie_h1_i++;
            $vie_h1_k++;
        }
        $vie_h1_output = json_encode($vie_h1);

        //********Hora 2********
        $vie_h2 = array();
        $vie_h2_i = 1;
        $vie_h2_k = 0;

        while ($vie_h2_i <= count($request->v2)) {
            $vie_h2[$vie_h2_i] = $request->v2[$vie_h2_k];
            $vie_h2_i++;
            $vie_h2_k++;
        }
        $vie_h2_output = json_encode($vie_h2);

        //********Hora 3********
        $vie_h3 = array();
        $vie_h3_i = 1;
        $vie_h3_k = 0;

        while ($vie_h3_i <= count($request->v3)) {
            $vie_h3[$vie_h3_i] = $request->v3[$vie_h3_k];
            $vie_h3_i++;
            $vie_h3_k++;
        }
        $vie_h3_output = json_encode($vie_h3);

        //********Hora 4********
        $vie_h4 = array();
        $vie_h4_i = 1;
        $vie_h4_k = 0;

        while ($vie_h4_i <= count($request->v4)) {
            $vie_h4[$vie_h4_i] = $request->v4[$vie_h4_k];
            $vie_h4_i++;
            $vie_h4_k++;
        }
        $vie_h4_output = json_encode($vie_h4);

        //********Hora 5********
        $vie_h5 = array();
        $vie_h5_i = 1;
        $vie_h5_k = 0;

        while ($vie_h5_i <= count($request->v5)) {
            $vie_h5[$vie_h5_i] = $request->v5[$vie_h5_k];
            $vie_h5_i++;
            $vie_h5_k++;
        }
        $vie_h5_output = json_encode($vie_h5);

        //********Hora 6********
        $vie_h6 = array();
        $vie_h6_i = 1;
        $vie_h6_k = 0;

        while ($vie_h6_i <= count($request->v6)) {
            $vie_h6[$vie_h6_i] = $request->v6[$vie_h6_k];
            $vie_h6_i++;
            $vie_h6_k++;
        }
        $vie_h6_output = json_encode($vie_h6);

        //********Hora 7********
        $vie_h7 = array();
        $vie_h7_i = 1;
        $vie_h7_k = 0;

        while ($vie_h7_i <= count($request->v7)) {
            $vie_h7[$vie_h7_i] = $request->v7[$vie_h7_k];
            $vie_h7_i++;
            $vie_h7_k++;
        }
        $vie_h7_output = json_encode($vie_h7);

        //********Hora 8********
        $vie_h8 = array();
        $vie_h8_i = 1;
        $vie_h8_k = 0;

        while ($vie_h8_i <= count($request->v8)) {
            $vie_h8[$vie_h8_i] = $request->v8[$vie_h8_k];
            $vie_h8_i++;
            $vie_h8_k++;
        }
        $vie_h8_output = json_encode($vie_h8);

        //********Hora 9********
        $vie_h9 = array();
        $vie_h9_i = 1;
        $vie_h9_k = 0;

        while ($vie_h9_i <= count($request->v9)) {
            $vie_h9[$vie_h9_i] = $request->v9[$vie_h9_k];
            $vie_h9_i++;
            $vie_h9_k++;
        }
        $vie_h9_output = json_encode($vie_h9);


        //********Hora 10********
        $vie_h10 = array();
        $vie_h10_i = 1;
        $vie_h10_k = 0;

        while ($vie_h10_i <= count($request->v10)) {
            $vie_h10[$vie_h10_i] = $request->v10[$vie_h10_k];
            $vie_h10_i++;
            $vie_h10_k++;
        }
        $vie_h10_output = json_encode($vie_h10);

        //********Hora 11********
        $vie_h11 = array();
        $vie_h11_i = 1;
        $vie_h11_k = 0;

        while ($vie_h11_i <= count($request->v11)) {
            $vie_h11[$vie_h11_i] = $request->v11[$vie_h11_k];
            $vie_h11_i++;
            $vie_h11_k++;
        }
        $vie_h11_output = json_encode($vie_h11);

        //********Hora 12********
        $vie_h12 = array();
        $vie_h12_i = 1;
        $vie_h12_k = 0;

        while ($vie_h12_i <= count($request->v13)) {
            $vie_h12[$vie_h12_i] = $request->v13[$vie_h12_k];
            $vie_h12_i++;
            $vie_h12_k++;
        }
        $vie_h12_output = json_encode($vie_h12);

        //********Hora 13********
        $vie_h13 = array();
        $vie_h13_i = 1;
        $vie_h13_k = 0;

        while ($vie_h13_i <= count($request->v14)) {
            $vie_h13[$vie_h13_i] = $request->v14[$vie_h13_k];
            $vie_h13_i++;
            $vie_h13_k++;
        }
        $vie_h13_output = json_encode($vie_h13);
        $viernes_h1 = Tiempo::where('numero_control', 14021073)->first();
        $viernes_h1->viernes_h1 = $vie_h1_output;
        $viernes_h1->viernes_h2 = $vie_h2_output;
        $viernes_h1->viernes_h3 = $vie_h3_output;
        $viernes_h1->viernes_h4 = $vie_h4_output;
        $viernes_h1->viernes_h5 = $vie_h5_output;
        $viernes_h1->viernes_h6 = $vie_h6_output;
        $viernes_h1->viernes_h7 = $vie_h7_output;
        $viernes_h1->viernes_h8 = $vie_h8_output;
        $viernes_h1->viernes_h9 = $vie_h9_output;
        $viernes_h1->viernes_h10 = $vie_h10_output;
        $viernes_h1->viernes_h11 = $vie_h11_output;
        $viernes_h1->viernes_h12 = $vie_h12_output;
        $viernes_h1->viernes_h13 = $vie_h13_output;
        $viernes_h1->avance_viernes_1 = 1;

        $viernes_h1->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.17;
        $u->save();

        return redirect('tiempo_ej_6');
    }

    public function store_t1_7(Request $request)
    {

        //********Hora 1********
        $sab_h1 = array();
        $sab_h1_i = 1;
        $sab_h1_k = 0;

        while ($sab_h1_i <= count($request->s1)) {
            $sab_h1[$sab_h1_i] = $request->s1[$sab_h1_k];
            $sab_h1_i++;
            $sab_h1_k++;
        }
        $sab_h1_output = json_encode($sab_h1);

        //********Hora 2********
        $sab_h2 = array();
        $sab_h2_i = 1;
        $sab_h2_k = 0;

        while ($sab_h2_i <= count($request->s2)) {
            $sab_h2[$sab_h2_i] = $request->s2[$sab_h2_k];
            $sab_h2_i++;
            $sab_h2_k++;
        }
        $sab_h2_output = json_encode($sab_h2);


        //********Hora 3********
        $sab_h3 = array();
        $sab_h3_i = 1;
        $sab_h3_k = 0;

        while ($sab_h3_i <= count($request->s3)) {
            $sab_h3[$sab_h3_i] = $request->s3[$sab_h3_k];
            $sab_h3_i++;
            $sab_h3_k++;
        }
        $sab_h3_output = json_encode($sab_h3);

        //********Hora 4********
        $sab_h4 = array();
        $sab_h4_i = 1;
        $sab_h4_k = 0;

        while ($sab_h4_i <= count($request->s4)) {
            $sab_h4[$sab_h4_i] = $request->s4[$sab_h4_k];
            $sab_h4_i++;
            $sab_h4_k++;
        }
        $sab_h4_output = json_encode($sab_h4);

        //********Hora 5********
        $sab_h5 = array();
        $sab_h5_i = 1;
        $sab_h5_k = 0;

        while ($sab_h5_i <= count($request->s5)) {
            $sab_h5[$sab_h5_i] = $request->s5[$sab_h5_k];
            $sab_h5_i++;
            $sab_h5_k++;
        }
        $sab_h5_output = json_encode($sab_h5);

        //********Hora 6********
        $sab_h6 = array();
        $sab_h6_i = 1;
        $sab_h6_k = 0;

        while ($sab_h6_i <= count($request->s6)) {
            $sab_h6[$sab_h6_i] = $request->s6[$sab_h6_k];
            $sab_h6_i++;
            $sab_h6_k++;
        }
        $sab_h6_output = json_encode($sab_h6);

        //********Hora 7********
        $sab_h7 = array();
        $sab_h7_i = 1;
        $sab_h7_k = 0;

        while ($sab_h7_i <= count($request->s7)) {
            $sab_h7[$sab_h7_i] = $request->s7[$sab_h7_k];
            $sab_h7_i++;
            $sab_h7_k++;
        }
        $sab_h7_output = json_encode($sab_h7);

        //********Hora 8********
        $sab_h8 = array();
        $sab_h8_i = 1;
        $sab_h8_k = 0;

        while ($sab_h8_i <= count($request->s8)) {
            $sab_h8[$sab_h8_i] = $request->s8[$sab_h8_k];
            $sab_h8_i++;
            $sab_h8_k++;
        }
        $sab_h8_output = json_encode($sab_h8);

        //********Hora 9********
        $sab_h9 = array();
        $sab_h9_i = 1;
        $sab_h9_k = 0;

        while ($sab_h9_i <= count($request->s9)) {
            $sab_h9[$sab_h9_i] = $request->s9[$sab_h9_k];
            $sab_h9_i++;
            $sab_h9_k++;
        }
        $sab_h9_output = json_encode($sab_h9);

        //********Hora 10********
        $sab_h10 = array();
        $sab_h10_i = 1;
        $sab_h10_k = 0;

        while ($sab_h10_i <= count($request->s10)) {
            $sab_h10[$sab_h10_i] = $request->s10[$sab_h10_k];
            $sab_h10_i++;
            $sab_h10_k++;
        }
        $sab_h10_output = json_encode($sab_h10);

        //********Hora 11********
        $sab_h11 = array();
        $sab_h11_i = 1;
        $sab_h11_k = 0;

        while ($sab_h11_i <= count($request->s11)) {
            $sab_h11[$sab_h11_i] = $request->s11[$sab_h11_k];
            $sab_h11_i++;
            $sab_h11_k++;
        }
        $sab_h11_output = json_encode($sab_h11);

        //********Hora 12********
        $sab_h12 = array();
        $sab_h12_i = 1;
        $sab_h12_k = 0;

        while ($sab_h12_i <= count($request->s13)) {
            $sab_h12[$sab_h12_i] = $request->s13[$sab_h12_k];
            $sab_h12_i++;
            $sab_h12_k++;
        }
        $sab_h12_output = json_encode($sab_h12);

        //********Hora 13********
        $sab_h13 = array();
        $sab_h13_i = 1;
        $sab_h13_k = 0;

        while ($sab_h13_i <= count($request->s14)) {
            $sab_h13[$sab_h13_i] = $request->s14[$sab_h13_k];
            $sab_h13_i++;
            $sab_h13_k++;
        }
        $sab_h13_output = json_encode($sab_h13);


        $sabado_h1 = Tiempo::where('numero_control', 14021073)->first();
        $sabado_h1->sabado_h1 = $sab_h1_output;
        $sabado_h1->sabado_h2 = $sab_h2_output;
        $sabado_h1->sabado_h3 = $sab_h3_output;
        $sabado_h1->sabado_h4 = $sab_h4_output;
        $sabado_h1->sabado_h5 = $sab_h5_output;
        $sabado_h1->sabado_h6 = $sab_h6_output;
        $sabado_h1->sabado_h7 = $sab_h7_output;
        $sabado_h1->sabado_h8 = $sab_h8_output;
        $sabado_h1->sabado_h9 = $sab_h9_output;
        $sabado_h1->sabado_h10 = $sab_h10_output;
        $sabado_h1->sabado_h11 = $sab_h11_output;
        $sabado_h1->sabado_h12 = $sab_h12_output;
        $sabado_h1->sabado_h13 = $sab_h13_output;
        $sabado_h1->avance_sabado_1 = 1;

        $sabado_h1->save();


        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.18;
        $u->save();

        return redirect('tiempo_ej_7');
    }

    public function store_t1_8(Request $request)
    {

        //********Hora 1********
        $dom_h1 = array();
        $dom_h1_i = 1;
        $dom_h1_k = 0;

        while ($dom_h1_i <= count($request->d1)) {
            $dom_h1[$dom_h1_i] = $request->d1[$dom_h1_k];
            $dom_h1_i++;
            $dom_h1_k++;
        }
        $dom_h1_output = json_encode($dom_h1);

        //********Hora 2********
        $dom_h2 = array();
        $dom_h2_i = 1;
        $dom_h2_k = 0;

        while ($dom_h2_i <= count($request->d2)) {
            $dom_h2[$dom_h2_i] = $request->d2[$dom_h2_k];
            $dom_h2_i++;
            $dom_h2_k++;
        }
        $dom_h2_output = json_encode($dom_h2);

        //********Hora 3********
        $dom_h3 = array();
        $dom_h3_i = 1;
        $dom_h3_k = 0;

        while ($dom_h3_i <= count($request->d3)) {
            $dom_h3[$dom_h3_i] = $request->d3[$dom_h3_k];
            $dom_h3_i++;
            $dom_h3_k++;
        }
        $dom_h3_output = json_encode($dom_h3);

        //********Hora 4********
        $dom_h4 = array();
        $dom_h4_i = 1;
        $dom_h4_k = 0;

        while ($dom_h4_i <= count($request->d4)) {
            $dom_h4[$dom_h4_i] = $request->d4[$dom_h4_k];
            $dom_h4_i++;
            $dom_h4_k++;
        }
        $dom_h4_output = json_encode($dom_h4);

        //********Hora 5********
        $dom_h5 = array();
        $dom_h5_i = 1;
        $dom_h5_k = 0;

        while ($dom_h5_i <= count($request->d5)) {
            $dom_h5[$dom_h5_i] = $request->d5[$dom_h5_k];
            $dom_h5_i++;
            $dom_h5_k++;
        }
        $dom_h5_output = json_encode($dom_h5);

        //********Hora 6********
        $dom_h6 = array();
        $dom_h6_i = 1;
        $dom_h6_k = 0;

        while ($dom_h6_i <= count($request->d6)) {
            $dom_h6[$dom_h6_i] = $request->d6[$dom_h6_k];
            $dom_h6_i++;
            $dom_h6_k++;
        }
        $dom_h6_output = json_encode($dom_h6);

        //********Hora 7********
        $dom_h7 = array();
        $dom_h7_i = 1;
        $dom_h7_k = 0;

        while ($dom_h7_i <= count($request->d7)) {
            $dom_h7[$dom_h7_i] = $request->d7[$dom_h7_k];
            $dom_h7_i++;
            $dom_h7_k++;
        }
        $dom_h7_output = json_encode($dom_h7);


        //********Hora 8********
        $dom_h8 = array();
        $dom_h8_i = 1;
        $dom_h8_k = 0;

        while ($dom_h8_i <= count($request->d8)) {
            $dom_h8[$dom_h8_i] = $request->d8[$dom_h8_k];
            $dom_h8_i++;
            $dom_h8_k++;
        }
        $dom_h8_output = json_encode($dom_h8);

        //********Hora 9********
        $dom_h9 = array();
        $dom_h9_i = 1;
        $dom_h9_k = 0;

        while ($dom_h9_i <= count($request->d9)) {
            $dom_h9[$dom_h9_i] = $request->d9[$dom_h9_k];
            $dom_h9_i++;
            $dom_h9_k++;
        }
        $dom_h9_output = json_encode($dom_h9);

        //********Hora 10********
        $dom_h10 = array();
        $dom_h10_i = 1;
        $dom_h10_k = 0;

        while ($dom_h10_i <= count($request->d10)) {
            $dom_h10[$dom_h10_i] = $request->d10[$dom_h10_k];
            $dom_h10_i++;
            $dom_h10_k++;
        }
        $dom_h10_output = json_encode($dom_h10);

        //********Hora 11********
        $dom_h11 = array();
        $dom_h11_i = 1;
        $dom_h11_k = 0;

        while ($dom_h11_i <= count($request->d11)) {
            $dom_h11[$dom_h11_i] = $request->d11[$dom_h11_k];
            $dom_h11_i++;
            $dom_h11_k++;
        }
        $dom_h11_output = json_encode($dom_h11);

        //********Hora 12********
        $dom_h12 = array();
        $dom_h12_i = 1;
        $dom_h12_k = 0;

        while ($dom_h12_i <= count($request->d13)) {
            $dom_h12[$dom_h12_i] = $request->d13[$dom_h12_k];
            $dom_h12_i++;
            $dom_h12_k++;
        }
        $dom_h12_output = json_encode($dom_h12);

        //********Hora 13********
        $dom_h13 = array();
        $dom_h13_i = 1;
        $dom_h13_k = 0;

        while ($dom_h13_i <= count($request->d14)) {
            $dom_h13[$dom_h13_i] = $request->d14[$dom_h13_k];
            $dom_h13_i++;
            $dom_h13_k++;
        }
        $dom_h13_output = json_encode($dom_h13);

        $domingo_h1 = Tiempo::where('numero_control', 14021073)->first();
        $domingo_h1->domingo_h1 = $dom_h1_output;
        $domingo_h1->domingo_h2 = $dom_h2_output;
        $domingo_h1->domingo_h3 = $dom_h3_output;
        $domingo_h1->domingo_h4 = $dom_h4_output;
        $domingo_h1->domingo_h5 = $dom_h5_output;
        $domingo_h1->domingo_h6 = $dom_h6_output;
        $domingo_h1->domingo_h7 = $dom_h7_output;
        $domingo_h1->domingo_h8 = $dom_h8_output;
        $domingo_h1->domingo_h9 = $dom_h9_output;
        $domingo_h1->domingo_h10 = $dom_h10_output;
        $domingo_h1->domingo_h11 = $dom_h11_output;
        $domingo_h1->domingo_h12 = $dom_h12_output;
        $domingo_h1->domingo_h13 = $dom_h13_output;
        $domingo_h1->avance_domingo_1 = 1;

        $domingo_h1->save();


        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.22;
        $u->save();

        return redirect('tiempo_ej_8');

    }

    public function store_t2_2(Request $request)
    {

        //********Act 1********
        $lun_sueno1 = array();
        $lun_sueno1_i = 1;
        $lun_sueno1_k = 0;

        while ($lun_sueno1_i <= count($request->sueno1)) {
            $lun_sueno1[$lun_sueno1_i] = $request->sueno1[$lun_sueno1_k];
            $lun_sueno1_i++;
            $lun_sueno1_k++;
        }
        $lun_sueno1_output = json_encode($lun_sueno1);

        //********Act 2********
        $lun_comida1 = array();
        $lun_comida1_i = 1;
        $lun_comida1_k = 0;

        while ($lun_comida1_i <= count($request->comida1)) {
            $lun_comida1[$lun_comida1_i] = $request->comida1[$lun_comida1_k];
            $lun_comida1_i++;
            $lun_comida1_k++;
        }
        $lun_comida1_output = json_encode($lun_comida1);

        //********Act 3********
        $lun_clase1 = array();
        $lun_clase1_i = 1;
        $lun_clase1_k = 0;

        while ($lun_clase1_i <= count($request->clase1)) {
            $lun_clase1[$lun_clase1_i] = $request->clase1[$lun_clase1_k];
            $lun_clase1_i++;
            $lun_clase1_k++;
        }
        $lun_clase1_output = json_encode($lun_clase1);

        //********Act 4********
        $lun_estudio1 = array();
        $lun_estudio1_i = 1;
        $lun_estudio1_k = 0;

        while ($lun_estudio1_i <= count($request->estudio1)) {
            $lun_estudio1[$lun_estudio1_i] = $request->estudio1[$lun_estudio1_k];
            $lun_estudio1_i++;
            $lun_estudio1_k++;
        }
        $lun_estudio1_output = json_encode($lun_estudio1);

        //********Act 5********
        $lun_rel1 = array();
        $lun_rel1_i = 1;
        $lun_rel1_k = 0;

        while ($lun_rel1_i <= count($request->rel1)) {
            $lun_rel1[$lun_rel1_i] = $request->rel1[$lun_rel1_k];
            $lun_rel1_i++;
            $lun_rel1_k++;
        }
        $lun_rel1_output = json_encode($lun_rel1);

        //********Act 6********
        $lun_soc1 = array();
        $lun_soc1_i = 1;
        $lun_soc1_k = 0;

        while ($lun_soc1_i <= count($request->soc1)) {
            $lun_soc1[$lun_soc1_i] = $request->soc1[$lun_soc1_k];
            $lun_soc1_i++;
            $lun_soc1_k++;
        }
        $lun_soc1_output = json_encode($lun_soc1);

        //********Act 7********
        $lun_dep1 = array();
        $lun_dep1_i = 1;
        $lun_dep1_k = 0;

        while ($lun_dep1_i <= count($request->dep1)) {
            $lun_dep1[$lun_dep1_i] = $request->dep1[$lun_dep1_k];
            $lun_dep1_i++;
            $lun_dep1_k++;
        }
        $lun_dep1_output = json_encode($lun_dep1);

        //********Act 8********
        $lun_per1 = array();
        $lun_per1_i = 1;
        $lun_per1_k = 0;

        while ($lun_per1_i <= count($request->per1)) {
            $lun_per1[$lun_per1_i] = $request->per1[$lun_per1_k];
            $lun_per1_i++;
            $lun_per1_k++;
        }
        $lun_per1_output = json_encode($lun_per1);

        $dia_1 = Tiempo::where('numero_control', 14021073)->first();
        $dia_1->sueno_1 = $lun_sueno1_output;
        $dia_1->comida_1 = $lun_comida1_output;
        $dia_1->clase_1 = $lun_clase1_output;
        $dia_1->estudio_1 = $lun_estudio1_output;
        $dia_1->rel_1 = $lun_rel1_output;
        $dia_1->soc_1 = $lun_soc1_output;
        $dia_1->dep_1 = $lun_dep1_output;
        $dia_1->per_1 = $lun_per1_output;
        $dia_1->avance_lunes_2 = 1;
        $dia_1->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.23;
        $u->save();

        return redirect('/tiempo_ej_2_2');
    }

    public function store_t2_3(Request $request)
    {
        //********Act 1********
        $lun_sueno2 = array();
        $lun_sueno2_i = 1;
        $lun_sueno2_k = 0;

        while ($lun_sueno2_i <= count($request->sueno2)) {
            $lun_sueno2[$lun_sueno2_i] = $request->sueno2[$lun_sueno2_k];
            $lun_sueno2_i++;
            $lun_sueno2_k++;
        }
        $lun_sueno2_output = json_encode($lun_sueno2);

        //********Act 2********
        $lun_comida2 = array();
        $lun_comida2_i = 1;
        $lun_comida2_k = 0;

        while ($lun_comida2_i <= count($request->comida2)) {
            $lun_comida2[$lun_comida2_i] = $request->comida2[$lun_comida2_k];
            $lun_comida2_i++;
            $lun_comida2_k++;
        }
        $lun_comida2_output = json_encode($lun_comida2);

        //********Act 3********
        $lun_clase2 = array();
        $lun_clase2_i = 1;
        $lun_clase2_k = 0;

        while ($lun_clase2_i <= count($request->clase2)) {
            $lun_clase2[$lun_clase2_i] = $request->clase2[$lun_clase2_k];
            $lun_clase2_i++;
            $lun_clase2_k++;
        }
        $lun_clase2_output = json_encode($lun_clase2);

        //********Act 4********
        $lun_estudio2 = array();
        $lun_estudio2_i = 1;
        $lun_estudio2_k = 0;

        while ($lun_estudio2_i <= count($request->estudio2)) {
            $lun_estudio2[$lun_estudio2_i] = $request->estudio2[$lun_estudio2_k];
            $lun_estudio2_i++;
            $lun_estudio2_k++;
        }
        $lun_estudio2_output = json_encode($lun_estudio2);

        //********Act 5********
        $lun_rel2 = array();
        $lun_rel2_i = 1;
        $lun_rel2_k = 0;

        while ($lun_rel2_i <= count($request->rel2)) {
            $lun_rel2[$lun_rel2_i] = $request->rel2[$lun_rel2_k];
            $lun_rel2_i++;
            $lun_rel2_k++;
        }
        $lun_rel2_output = json_encode($lun_rel2);

        //********Act 6********
        $lun_soc2 = array();
        $lun_soc2_i = 1;
        $lun_soc2_k = 0;

        while ($lun_soc2_i <= count($request->soc2)) {
            $lun_soc2[$lun_soc2_i] = $request->soc2[$lun_soc2_k];
            $lun_soc2_i++;
            $lun_soc2_k++;
        }
        $lun_soc2_output = json_encode($lun_soc2);

        //********Act 7********
        $lun_dep2 = array();
        $lun_dep2_i = 1;
        $lun_dep2_k = 0;

        while ($lun_dep2_i <= count($request->dep2)) {
            $lun_dep2[$lun_dep2_i] = $request->dep2[$lun_dep2_k];
            $lun_dep2_i++;
            $lun_dep2_k++;
        }
        $lun_dep2_output = json_encode($lun_dep2);

        //********Act 8********
        $lun_per2 = array();
        $lun_per2_i = 1;
        $lun_per2_k = 0;

        while ($lun_per2_i <= count($request->per2)) {
            $lun_per2[$lun_per2_i] = $request->per2[$lun_per2_k];
            $lun_per2_i++;
            $lun_per2_k++;
        }
        $lun_per2_output = json_encode($lun_per2);

        $dia_2 = Tiempo::where('numero_control', 14021073)->first();
        $dia_2->sueno_2 = $lun_sueno2_output;
        $dia_2->comida_2 = $lun_comida2_output;
        $dia_2->clase_2 = $lun_clase2_output;
        $dia_2->estudio_2 = $lun_estudio2_output;
        $dia_2->rel_2 = $lun_rel2_output;
        $dia_2->soc_2 = $lun_soc2_output;
        $dia_2->dep_2 = $lun_dep2_output;
        $dia_2->per_2 = $lun_per2_output;
        $dia_2->avance_martes_2 = 1;

        $dia_2->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.24;
        $u->save();

        return redirect('/tiempo_ej_2_3');


    }

    public function store_t2_4(Request $request)
    {

        //********Act 1********
        $lun_sueno3 = array();
        $lun_sueno3_i = 1;
        $lun_sueno3_k = 0;

        while ($lun_sueno3_i <= count($request->sueno3)) {
            $lun_sueno3[$lun_sueno3_i] = $request->sueno3[$lun_sueno3_k];
            $lun_sueno3_i++;
            $lun_sueno3_k++;
        }
        $lun_sueno3_output = json_encode($lun_sueno3);

        //********Act 2********
        $lun_comida3 = array();
        $lun_comida3_i = 1;
        $lun_comida3_k = 0;

        while ($lun_comida3_i <= count($request->comida3)) {
            $lun_comida3[$lun_comida3_i] = $request->comida3[$lun_comida3_k];
            $lun_comida3_i++;
            $lun_comida3_k++;
        }
        $lun_comida3_output = json_encode($lun_comida3);

        //********Act 3********
        $lun_clase3 = array();
        $lun_clase3_i = 1;
        $lun_clase3_k = 0;

        while ($lun_clase3_i <= count($request->clase3)) {
            $lun_clase3[$lun_clase3_i] = $request->clase3[$lun_clase3_k];
            $lun_clase3_i++;
            $lun_clase3_k++;
        }
        $lun_clase3_output = json_encode($lun_clase3);

        //********Act 4********
        $lun_estudio3 = array();
        $lun_estudio3_i = 1;
        $lun_estudio3_k = 0;

        while ($lun_estudio3_i <= count($request->estudio3)) {
            $lun_estudio3[$lun_estudio3_i] = $request->estudio3[$lun_estudio3_k];
            $lun_estudio3_i++;
            $lun_estudio3_k++;
        }
        $lun_estudio3_output = json_encode($lun_estudio3);

        //********Act 5********
        $lun_rel3 = array();
        $lun_rel3_i = 1;
        $lun_rel3_k = 0;

        while ($lun_rel3_i <= count($request->rel3)) {
            $lun_rel3[$lun_rel3_i] = $request->rel3[$lun_rel3_k];
            $lun_rel3_i++;
            $lun_rel3_k++;
        }
        $lun_rel3_output = json_encode($lun_rel3);

        //********Act 6********
        $lun_soc3 = array();
        $lun_soc3_i = 1;
        $lun_soc3_k = 0;

        while ($lun_soc3_i <= count($request->soc3)) {
            $lun_soc3[$lun_soc3_i] = $request->soc3[$lun_soc3_k];
            $lun_soc3_i++;
            $lun_soc3_k++;
        }
        $lun_soc3_output = json_encode($lun_soc3);

        //********Act 7********
        $lun_dep3 = array();
        $lun_dep3_i = 1;
        $lun_dep3_k = 0;

        while ($lun_dep3_i <= count($request->dep3)) {
            $lun_dep3[$lun_dep3_i] = $request->dep3[$lun_dep3_k];
            $lun_dep3_i++;
            $lun_dep3_k++;
        }
        $lun_dep3_output = json_encode($lun_dep3);

        //********Act 8********
        $lun_per3 = array();
        $lun_per3_i = 1;
        $lun_per3_k = 0;

        while ($lun_per3_i <= count($request->per3)) {
            $lun_per3[$lun_per3_i] = $request->per3[$lun_per3_k];
            $lun_per3_i++;
            $lun_per3_k++;
        }
        $lun_per3_output = json_encode($lun_per3);

        $dia_3 = Tiempo::where('numero_control', 14021073)->first();
        $dia_3->sueno_3 = $lun_sueno3_output;
        $dia_3->comida_3 = $lun_comida3_output;
        $dia_3->clase_3 = $lun_clase3_output;
        $dia_3->estudio_3 = $lun_estudio3_output;
        $dia_3->rel_3 = $lun_rel3_output;
        $dia_3->soc_3 = $lun_soc3_output;
        $dia_3->dep_3 = $lun_dep3_output;
        $dia_3->per_3 = $lun_per3_output;
        $dia_3->avance_miercoles_2 = 1;

        $dia_3->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.25;
        $u->save();

        return redirect('/tiempo_ej_2_4');

    }

    public function store_t2_5(Request $request)
    {

        //********Act 1********
        $lun_sueno4 = array();
        $lun_sueno4_i = 1;
        $lun_sueno4_k = 0;

        while ($lun_sueno4_i <= count($request->sueno4)) {
            $lun_sueno4[$lun_sueno4_i] = $request->sueno4[$lun_sueno4_k];
            $lun_sueno4_i++;
            $lun_sueno4_k++;
        }
        $lun_sueno4_output = json_encode($lun_sueno4);

        //********Act 2********
        $lun_comida4 = array();
        $lun_comida4_i = 1;
        $lun_comida4_k = 0;

        while ($lun_comida4_i <= count($request->comida4)) {
            $lun_comida4[$lun_comida4_i] = $request->comida4[$lun_comida4_k];
            $lun_comida4_i++;
            $lun_comida4_k++;
        }
        $lun_comida4_output = json_encode($lun_comida4);

        //********Act 3********
        $lun_clase4 = array();
        $lun_clase4_i = 1;
        $lun_clase4_k = 0;

        while ($lun_clase4_i <= count($request->clase4)) {
            $lun_clase4[$lun_clase4_i] = $request->clase4[$lun_clase4_k];
            $lun_clase4_i++;
            $lun_clase4_k++;
        }
        $lun_clase4_output = json_encode($lun_clase4);

        //********Act 4********
        $lun_estudio4 = array();
        $lun_estudio4_i = 1;
        $lun_estudio4_k = 0;

        while ($lun_estudio4_i <= count($request->estudio4)) {
            $lun_estudio4[$lun_estudio4_i] = $request->estudio4[$lun_estudio4_k];
            $lun_estudio4_i++;
            $lun_estudio4_k++;
        }
        $lun_estudio4_output = json_encode($lun_estudio4);

        //********Act 5********
        $lun_rel4 = array();
        $lun_rel4_i = 1;
        $lun_rel4_k = 0;

        while ($lun_rel4_i <= count($request->rel4)) {
            $lun_rel4[$lun_rel4_i] = $request->rel4[$lun_rel4_k];
            $lun_rel4_i++;
            $lun_rel4_k++;
        }
        $lun_rel4_output = json_encode($lun_rel4);

        //********Act 6********
        $lun_soc4 = array();
        $lun_soc4_i = 1;
        $lun_soc4_k = 0;

        while ($lun_soc4_i <= count($request->soc4)) {
            $lun_soc4[$lun_soc4_i] = $request->soc4[$lun_soc4_k];
            $lun_soc4_i++;
            $lun_soc4_k++;
        }
        $lun_soc4_output = json_encode($lun_soc4);

        //********Act 7********
        $lun_dep4 = array();
        $lun_dep4_i = 1;
        $lun_dep4_k = 0;

        while ($lun_dep4_i <= count($request->dep4)) {
            $lun_dep4[$lun_dep4_i] = $request->dep4[$lun_dep4_k];
            $lun_dep4_i++;
            $lun_dep4_k++;
        }
        $lun_dep4_output = json_encode($lun_dep4);

        //********Act 8********
        $lun_per4 = array();
        $lun_per4_i = 1;
        $lun_per4_k = 0;

        while ($lun_per4_i <= count($request->per4)) {
            $lun_per4[$lun_per4_i] = $request->per4[$lun_per4_k];
            $lun_per4_i++;
            $lun_per4_k++;
        }
        $lun_per4_output = json_encode($lun_per4);

        $dia_4 = Tiempo::where('numero_control', 14021073)->first();
        $dia_4->sueno_4 = $lun_sueno4_output;
        $dia_4->comida_4 = $lun_comida4_output;
        $dia_4->clase_4 = $lun_clase4_output;
        $dia_4->estudio_4 = $lun_estudio4_output;
        $dia_4->rel_4 = $lun_rel4_output;
        $dia_4->soc_4 = $lun_soc4_output;
        $dia_4->dep_4 = $lun_dep4_output;
        $dia_4->per_4 = $lun_per4_output;
        $dia_4->avance_jueves_2 = 1;

        $dia_4->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.26;
        $u->save();

        return redirect('/tiempo_ej_2_5');
    }

    public function store_t2_6(Request $request)
    {

        //********Act 1********
        $lun_sueno5 = array();
        $lun_sueno5_i = 1;
        $lun_sueno5_k = 0;

        while ($lun_sueno5_i <= count($request->sueno5)) {
            $lun_sueno5[$lun_sueno5_i] = $request->sueno5[$lun_sueno5_k];
            $lun_sueno5_i++;
            $lun_sueno5_k++;
        }
        $lun_sueno5_output = json_encode($lun_sueno5);

        //********Act 2********
        $lun_comida5 = array();
        $lun_comida5_i = 1;
        $lun_comida5_k = 0;

        while ($lun_comida5_i <= count($request->comida5)) {
            $lun_comida5[$lun_comida5_i] = $request->comida5[$lun_comida5_k];
            $lun_comida5_i++;
            $lun_comida5_k++;
        }
        $lun_comida5_output = json_encode($lun_comida5);

        //********Act 3********
        $lun_clase5 = array();
        $lun_clase5_i = 1;
        $lun_clase5_k = 0;

        while ($lun_clase5_i <= count($request->clase5)) {
            $lun_clase5[$lun_clase5_i] = $request->clase5[$lun_clase5_k];
            $lun_clase5_i++;
            $lun_clase5_k++;
        }
        $lun_clase5_output = json_encode($lun_clase5);

        //********Act 4********
        $lun_estudio5 = array();
        $lun_estudio5_i = 1;
        $lun_estudio5_k = 0;

        while ($lun_estudio5_i <= count($request->estudio5)) {
            $lun_estudio5[$lun_estudio5_i] = $request->estudio5[$lun_estudio5_k];
            $lun_estudio5_i++;
            $lun_estudio5_k++;
        }
        $lun_estudio5_output = json_encode($lun_estudio5);

        //********Act 5********
        $lun_rel5 = array();
        $lun_rel5_i = 1;
        $lun_rel5_k = 0;

        while ($lun_rel5_i <= count($request->rel5)) {
            $lun_rel5[$lun_rel5_i] = $request->rel5[$lun_rel5_k];
            $lun_rel5_i++;
            $lun_rel5_k++;
        }
        $lun_rel5_output = json_encode($lun_rel5);

        //********Act 6********
        $lun_soc5 = array();
        $lun_soc5_i = 1;
        $lun_soc5_k = 0;

        while ($lun_soc5_i <= count($request->soc5)) {
            $lun_soc5[$lun_soc5_i] = $request->soc5[$lun_soc5_k];
            $lun_soc5_i++;
            $lun_soc5_k++;
        }
        $lun_soc5_output = json_encode($lun_soc5);

        //********Act 7********
        $lun_dep5 = array();
        $lun_dep5_i = 1;
        $lun_dep5_k = 0;

        while ($lun_dep5_i <= count($request->dep5)) {
            $lun_dep5[$lun_dep5_i] = $request->dep5[$lun_dep5_k];
            $lun_dep5_i++;
            $lun_dep5_k++;
        }
        $lun_dep5_output = json_encode($lun_dep5);

        //********Act 8********
        $lun_per5 = array();
        $lun_per5_i = 1;
        $lun_per5_k = 0;

        while ($lun_per5_i <= count($request->per5)) {
            $lun_per5[$lun_per5_i] = $request->per5[$lun_per5_k];
            $lun_per5_i++;
            $lun_per5_k++;
        }
        $lun_per5_output = json_encode($lun_per5);

        $dia_5 = Tiempo::where('numero_control', 14021073)->first();
        $dia_5->sueno_5 = $lun_sueno5_output;
        $dia_5->comida_5 = $lun_comida5_output;
        $dia_5->clase_5 = $lun_clase5_output;
        $dia_5->estudio_5 = $lun_estudio5_output;
        $dia_5->rel_5 = $lun_rel5_output;
        $dia_5->soc_5 = $lun_soc5_output;
        $dia_5->dep_5 = $lun_dep5_output;
        $dia_5->per_5 = $lun_per5_output;
        $dia_5->avance_viernes_2 = 1;

        $dia_5->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.27;
        $u->save();

        return redirect('/tiempo_ej_2_6');
    }

    public function store_t2_7(Request $request)
    {

        //********Act 1********
        $lun_sueno6 = array();
        $lun_sueno6_i = 1;
        $lun_sueno6_k = 0;

        while ($lun_sueno6_i <= count($request->sueno6)) {
            $lun_sueno6[$lun_sueno6_i] = $request->sueno6[$lun_sueno6_k];
            $lun_sueno6_i++;
            $lun_sueno6_k++;
        }
        $lun_sueno6_output = json_encode($lun_sueno6);

        //********Act 2********
        $lun_comida6 = array();
        $lun_comida6_i = 1;
        $lun_comida6_k = 0;

        while ($lun_comida6_i <= count($request->comida6)) {
            $lun_comida6[$lun_comida6_i] = $request->comida6[$lun_comida6_k];
            $lun_comida6_i++;
            $lun_comida6_k++;
        }
        $lun_comida6_output = json_encode($lun_comida6);

        //********Act 3********
        $lun_clase6 = array();
        $lun_clase6_i = 1;
        $lun_clase6_k = 0;

        while ($lun_clase6_i <= count($request->clase6)) {
            $lun_clase6[$lun_clase6_i] = $request->clase6[$lun_clase6_k];
            $lun_clase6_i++;
            $lun_clase6_k++;
        }
        $lun_clase6_output = json_encode($lun_clase6);

        //********Act 4********
        $lun_estudio6 = array();
        $lun_estudio6_i = 1;
        $lun_estudio6_k = 0;

        while ($lun_estudio6_i <= count($request->estudio6)) {
            $lun_estudio6[$lun_estudio6_i] = $request->estudio6[$lun_estudio6_k];
            $lun_estudio6_i++;
            $lun_estudio6_k++;
        }
        $lun_estudio6_output = json_encode($lun_estudio6);

        //********Act 5********
        $lun_rel6 = array();
        $lun_rel6_i = 1;
        $lun_rel6_k = 0;

        while ($lun_rel6_i <= count($request->rel6)) {
            $lun_rel6[$lun_rel6_i] = $request->rel6[$lun_rel6_k];
            $lun_rel6_i++;
            $lun_rel6_k++;
        }
        $lun_rel6_output = json_encode($lun_rel6);

        //********Act 6********
        $lun_soc6 = array();
        $lun_soc6_i = 1;
        $lun_soc6_k = 0;

        while ($lun_soc6_i <= count($request->soc6)) {
            $lun_soc6[$lun_soc6_i] = $request->soc6[$lun_soc6_k];
            $lun_soc6_i++;
            $lun_soc6_k++;
        }
        $lun_soc6_output = json_encode($lun_soc6);

        //********Act 7********
        $lun_dep6 = array();
        $lun_dep6_i = 1;
        $lun_dep6_k = 0;

        while ($lun_dep6_i <= count($request->dep6)) {
            $lun_dep6[$lun_dep6_i] = $request->dep6[$lun_dep6_k];
            $lun_dep6_i++;
            $lun_dep6_k++;
        }
        $lun_dep6_output = json_encode($lun_dep6);

        //********Act 8********
        $lun_per6 = array();
        $lun_per6_i = 1;
        $lun_per6_k = 0;

        while ($lun_per6_i <= count($request->per6)) {
            $lun_per6[$lun_per6_i] = $request->per6[$lun_per6_k];
            $lun_per6_i++;
            $lun_per6_k++;
        }
        $lun_per6_output = json_encode($lun_per6);

        $dia_6 = Tiempo::where('numero_control', 14021073)->first();
        $dia_6->sueno_6 = $lun_sueno6_output;
        $dia_6->comida_6 = $lun_comida6_output;
        $dia_6->clase_6 = $lun_clase6_output;
        $dia_6->estudio_6 = $lun_estudio6_output;
        $dia_6->rel_6 = $lun_rel6_output;
        $dia_6->soc_6 = $lun_soc6_output;
        $dia_6->dep_6 = $lun_dep6_output;
        $dia_6->per_6 = $lun_per6_output;
        $dia_6->avance_sabado_2 = 1;

        $dia_6->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 2.28;
        $u->save();

        return redirect('/tiempo_ej_2_7');
    }

    public function store_t2_8(Request $request)
    {

        //********Act 1********
        $lun_sueno7 = array();
        $lun_sueno7_i = 1;
        $lun_sueno7_k = 0;

        while ($lun_sueno7_i <= count($request->sueno7)) {
            $lun_sueno7[$lun_sueno7_i] = $request->sueno7[$lun_sueno7_k];
            $lun_sueno7_i++;
            $lun_sueno7_k++;
        }
        $lun_sueno7_output = json_encode($lun_sueno7);

        //********Act 2********
        $lun_comida7 = array();
        $lun_comida7_i = 1;
        $lun_comida7_k = 0;

        while ($lun_comida7_i <= count($request->comida7)) {
            $lun_comida7[$lun_comida7_i] = $request->comida7[$lun_comida7_k];
            $lun_comida7_i++;
            $lun_comida7_k++;
        }
        $lun_comida7_output = json_encode($lun_comida7);

        //********Act 3********
        $lun_clase7 = array();
        $lun_clase7_i = 1;
        $lun_clase7_k = 0;

        while ($lun_clase7_i <= count($request->clase7)) {
            $lun_clase7[$lun_clase7_i] = $request->clase7[$lun_clase7_k];
            $lun_clase7_i++;
            $lun_clase7_k++;
        }
        $lun_clase7_output = json_encode($lun_clase7);

        //********Act 4********
        $lun_estudio7 = array();
        $lun_estudio7_i = 1;
        $lun_estudio7_k = 0;

        while ($lun_estudio7_i <= count($request->estudio7)) {
            $lun_estudio7[$lun_estudio7_i] = $request->estudio7[$lun_estudio7_k];
            $lun_estudio7_i++;
            $lun_estudio7_k++;
        }
        $lun_estudio7_output = json_encode($lun_estudio7);

        //********Act 5********
        $lun_rel7 = array();
        $lun_rel7_i = 1;
        $lun_rel7_k = 0;

        while ($lun_rel7_i <= count($request->rel7)) {
            $lun_rel7[$lun_rel7_i] = $request->rel7[$lun_rel7_k];
            $lun_rel7_i++;
            $lun_rel7_k++;
        }
        $lun_rel7_output = json_encode($lun_rel7);

        //********Act 6********
        $lun_soc7 = array();
        $lun_soc7_i = 1;
        $lun_soc7_k = 0;

        while ($lun_soc7_i <= count($request->soc7)) {
            $lun_soc7[$lun_soc7_i] = $request->soc7[$lun_soc7_k];
            $lun_soc7_i++;
            $lun_soc7_k++;
        }
        $lun_soc7_output = json_encode($lun_soc7);

        //********Act 7********
        $lun_dep7 = array();
        $lun_dep7_i = 1;
        $lun_dep7_k = 0;

        while ($lun_dep7_i <= count($request->dep7)) {
            $lun_dep7[$lun_dep7_i] = $request->dep7[$lun_dep7_k];
            $lun_dep7_i++;
            $lun_dep7_k++;
        }
        $lun_dep7_output = json_encode($lun_dep7);

        //********Act 8********
        $lun_per7 = array();
        $lun_per7_i = 1;
        $lun_per7_k = 0;

        while ($lun_per7_i <= count($request->per7)) {
            $lun_per7[$lun_per7_i] = $request->per7[$lun_per7_k];
            $lun_per7_i++;
            $lun_per7_k++;
        }
        $lun_per7_output = json_encode($lun_per7);

        $dia_7 = Tiempo::where('numero_control', 14021073)->first();
        $dia_7->sueno_7 = $lun_sueno7_output;
        $dia_7->comida_7 = $lun_comida7_output;
        $dia_7->clase_7 = $lun_clase7_output;
        $dia_7->estudio_7 = $lun_estudio7_output;
        $dia_7->rel_7 = $lun_rel7_output;
        $dia_7->soc_7 = $lun_soc7_output;
        $dia_7->dep_7 = $lun_dep7_output;
        $dia_7->per_7 = $lun_per7_output;
        $dia_7->avance_domingo_2 = 1;

        $dia_7->save();

        $u = User::where('numero_control', 14021073)->first();
        $u->avance = 3.1;
        $u->save();

        return redirect('/tiempo_ej_2_8');
    }

    public function edit_t1_2(Request $request)
    {


        // HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->le1)) {
            $f1[$i] = $request->le1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

        // HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->le2)) {
            $f2[$i2] = $request->le2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


        // HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->le3)) {
            $f3[$i3] = $request->le3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

        // HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->le4)) {
            $f4[$i4] = $request->le4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


        // HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->le5)) {
            $f5[$i5] = $request->le5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

        // HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->le6)) {
            $f6[$i6] = $request->le6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


        // HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->le7)) {
            $f7[$i7] = $request->le7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

        // HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->le8)) {
            $f8[$i8] = $request->le8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

        // HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->le9)) {
            $f9[$i9] = $request->le9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


        // HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->le10)) {
            $f10[$i10] = $request->le10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


        // HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->le11)) {
            $f11[$i11] = $request->le11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


        // HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->le12)) {
            $f12[$i12] = $request->le12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


        // HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->le13)) {
            $f13[$i13] = $request->le13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $lunes_h1 = Tiempo::where('numero_control', 14021073)->first();

        $lunes_h1->lunes_h1 = $f1_output1;
        $lunes_h1->lunes_h2 = $f1_output2;
        $lunes_h1->lunes_h3 = $f1_output3;
        $lunes_h1->lunes_h4 = $f1_output4;
        $lunes_h1->lunes_h5 = $f1_output5;
        $lunes_h1->lunes_h6 = $f1_output6;
        $lunes_h1->lunes_h7 = $f1_output7;
        $lunes_h1->lunes_h8 = $f1_output8;
        $lunes_h1->lunes_h9 = $f1_output9;
        $lunes_h1->lunes_h10 = $f1_output10;
        $lunes_h1->lunes_h11 = $f1_output11;
        $lunes_h1->lunes_h12 = $f1_output12;
        $lunes_h1->lunes_h13 = $f1_output13;

        $lunes_h1->save();

        return redirect('/tiempo_ej_2');


    }

    public function edit_t1_3(Request $request)
    {


// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->me1)) {
            $f1[$i] = $request->me1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->me2)) {
            $f2[$i2] = $request->me2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->me3)) {
            $f3[$i3] = $request->me3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->me4)) {
            $f4[$i4] = $request->me4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->me5)) {
            $f5[$i5] = $request->me5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->me6)) {
            $f6[$i6] = $request->me6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->me7)) {
            $f7[$i7] = $request->me7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->me8)) {
            $f8[$i8] = $request->me8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->me9)) {
            $f9[$i9] = $request->me9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->me10)) {
            $f10[$i10] = $request->me10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->me11)) {
            $f11[$i11] = $request->me11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->me12)) {
            $f12[$i12] = $request->me12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->me13)) {
            $f13[$i13] = $request->me13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $martes_h1 = Tiempo::where('numero_control', 14021073)->first();

        $martes_h1->martes_h1 = $f1_output1;
        $martes_h1->martes_h2 = $f1_output2;
        $martes_h1->martes_h3 = $f1_output3;
        $martes_h1->martes_h4 = $f1_output4;
        $martes_h1->martes_h5 = $f1_output5;
        $martes_h1->martes_h6 = $f1_output6;
        $martes_h1->martes_h7 = $f1_output7;
        $martes_h1->martes_h8 = $f1_output8;
        $martes_h1->martes_h9 = $f1_output9;
        $martes_h1->martes_h10 = $f1_output10;
        $martes_h1->martes_h11 = $f1_output11;
        $martes_h1->martes_h12 = $f1_output12;
        $martes_h1->martes_h13 = $f1_output13;

        $martes_h1->save();

        return redirect()->back();


    }

    public function edit_t1_4(Request $request)
    {


// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->mie1)) {
            $f1[$i] = $request->mie1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->mie2)) {
            $f2[$i2] = $request->mie2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->mie3)) {
            $f3[$i3] = $request->mie3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->mie4)) {
            $f4[$i4] = $request->mie4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->mie5)) {
            $f5[$i5] = $request->mie5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->mie6)) {
            $f6[$i6] = $request->mie6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->mie7)) {
            $f7[$i7] = $request->mie7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->mie8)) {
            $f8[$i8] = $request->mie8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->mie9)) {
            $f9[$i9] = $request->mie9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->mie10)) {
            $f10[$i10] = $request->mie10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->mie11)) {
            $f11[$i11] = $request->mie11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->mie12)) {
            $f12[$i12] = $request->mie12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->mie13)) {
            $f13[$i13] = $request->mie13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $miercoles_h1 = Tiempo::where('numero_control', 14021073)->first();

        $miercoles_h1->miercoles_h1 = $f1_output1;
        $miercoles_h1->miercoles_h2 = $f1_output2;
        $miercoles_h1->miercoles_h3 = $f1_output3;
        $miercoles_h1->miercoles_h4 = $f1_output4;
        $miercoles_h1->miercoles_h5 = $f1_output5;
        $miercoles_h1->miercoles_h6 = $f1_output6;
        $miercoles_h1->miercoles_h7 = $f1_output7;
        $miercoles_h1->miercoles_h8 = $f1_output8;
        $miercoles_h1->miercoles_h9 = $f1_output9;
        $miercoles_h1->miercoles_h10 = $f1_output10;
        $miercoles_h1->miercoles_h11 = $f1_output11;
        $miercoles_h1->miercoles_h12 = $f1_output12;
        $miercoles_h1->miercoles_h13 = $f1_output13;

        $miercoles_h1->save();

        return redirect()->back();


    }

    public function edit_t1_5(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->je1)) {
            $f1[$i] = $request->je1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->je2)) {
            $f2[$i2] = $request->je2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->je3)) {
            $f3[$i3] = $request->je3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->je4)) {
            $f4[$i4] = $request->je4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->je5)) {
            $f5[$i5] = $request->je5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->je6)) {
            $f6[$i6] = $request->je6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->je7)) {
            $f7[$i7] = $request->je7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->je8)) {
            $f8[$i8] = $request->je8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->je9)) {
            $f9[$i9] = $request->je9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->je10)) {
            $f10[$i10] = $request->je10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->je11)) {
            $f11[$i11] = $request->je11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->je12)) {
            $f12[$i12] = $request->je12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->je13)) {
            $f13[$i13] = $request->je13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $jueves_h1 = Tiempo::where('numero_control', 14021073)->first();

        $jueves_h1->jueves_h1 = $f1_output1;
        $jueves_h1->jueves_h2 = $f1_output2;
        $jueves_h1->jueves_h3 = $f1_output3;
        $jueves_h1->jueves_h4 = $f1_output4;
        $jueves_h1->jueves_h5 = $f1_output5;
        $jueves_h1->jueves_h6 = $f1_output6;
        $jueves_h1->jueves_h7 = $f1_output7;
        $jueves_h1->jueves_h8 = $f1_output8;
        $jueves_h1->jueves_h9 = $f1_output9;
        $jueves_h1->jueves_h10 = $f1_output10;
        $jueves_h1->jueves_h11 = $f1_output11;
        $jueves_h1->jueves_h12 = $f1_output12;
        $jueves_h1->jueves_h13 = $f1_output13;

        $jueves_h1->save();

        return redirect()->back();

    }


    public function edit_t1_6(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->ve1)) {
            $f1[$i] = $request->ve1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->ve2)) {
            $f2[$i2] = $request->ve2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->ve3)) {
            $f3[$i3] = $request->ve3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->ve4)) {
            $f4[$i4] = $request->ve4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->ve5)) {
            $f5[$i5] = $request->ve5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->ve6)) {
            $f6[$i6] = $request->ve6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->ve7)) {
            $f7[$i7] = $request->ve7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->ve8)) {
            $f8[$i8] = $request->ve8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->ve9)) {
            $f9[$i9] = $request->ve9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->ve10)) {
            $f10[$i10] = $request->ve10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->ve11)) {
            $f11[$i11] = $request->ve11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->ve12)) {
            $f12[$i12] = $request->ve12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->ve13)) {
            $f13[$i13] = $request->ve13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $viernes_h1 = Tiempo::where('numero_control', 14021073)->first();

        $viernes_h1->viernes_h1 = $f1_output1;
        $viernes_h1->viernes_h2 = $f1_output2;
        $viernes_h1->viernes_h3 = $f1_output3;
        $viernes_h1->viernes_h4 = $f1_output4;
        $viernes_h1->viernes_h5 = $f1_output5;
        $viernes_h1->viernes_h6 = $f1_output6;
        $viernes_h1->viernes_h7 = $f1_output7;
        $viernes_h1->viernes_h8 = $f1_output8;
        $viernes_h1->viernes_h9 = $f1_output9;
        $viernes_h1->viernes_h10 = $f1_output10;
        $viernes_h1->viernes_h11 = $f1_output11;
        $viernes_h1->viernes_h12 = $f1_output12;
        $viernes_h1->viernes_h13 = $f1_output13;

        $viernes_h1->save();

        return redirect()->back();

    }


    public function edit_t1_7(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->se1)) {
            $f1[$i] = $request->se1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->se2)) {
            $f2[$i2] = $request->se2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->se3)) {
            $f3[$i3] = $request->se3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->se4)) {
            $f4[$i4] = $request->se4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->se5)) {
            $f5[$i5] = $request->se5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->se6)) {
            $f6[$i6] = $request->se6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->se7)) {
            $f7[$i7] = $request->se7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->se8)) {
            $f8[$i8] = $request->se8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->se9)) {
            $f9[$i9] = $request->se9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->se10)) {
            $f10[$i10] = $request->se10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->se11)) {
            $f11[$i11] = $request->se11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->se12)) {
            $f12[$i12] = $request->se12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->se13)) {
            $f13[$i13] = $request->se13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $_h1sabado = Tiempo::where('numero_control', 14021073)->first();

        $_h1sabado->sabado_h1 = $f1_output1;
        $_h1sabado->sabado_h2 = $f1_output2;
        $_h1sabado->sabado_h3 = $f1_output3;
        $_h1sabado->sabado_h4 = $f1_output4;
        $_h1sabado->sabado_h5 = $f1_output5;
        $_h1sabado->sabado_h6 = $f1_output6;
        $_h1sabado->sabado_h7 = $f1_output7;
        $_h1sabado->sabado_h8 = $f1_output8;
        $_h1sabado->sabado_h9 = $f1_output9;
        $_h1sabado->sabado_h10 = $f1_output10;
        $_h1sabado->sabado_h11 = $f1_output11;
        $_h1sabado->sabado_h12 = $f1_output12;
        $_h1sabado->sabado_h13 = $f1_output13;

        $_h1sabado->save();

        return redirect()->back();

    }

    public function edit_t1_8(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->de1)) {
            $f1[$i] = $request->de1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->de2)) {
            $f2[$i2] = $request->de2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->de3)) {
            $f3[$i3] = $request->de3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->de4)) {
            $f4[$i4] = $request->de4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->de5)) {
            $f5[$i5] = $request->de5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->de6)) {
            $f6[$i6] = $request->de6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->de7)) {
            $f7[$i7] = $request->de7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->de8)) {
            $f8[$i8] = $request->de8[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);

// HORA 9
        $f9 = array();
        $i9 = 1;
        $k9 = 0;

        while ($i9 <= count($request->de9)) {
            $f9[$i9] = $request->de9[$k9];
            $i9++;
            $k9++;
        }

        $f1_output9 = json_encode($f9);


// HORA 10
        $f10 = array();
        $i10 = 1;
        $k10 = 0;

        while ($i10 <= count($request->de10)) {
            $f10[$i10] = $request->de10[$k10];
            $i10++;
            $k10++;
        }

        $f1_output10 = json_encode($f10);


// HORA 11
        $f11 = array();
        $i11 = 1;
        $k11 = 0;

        while ($i11 <= count($request->de11)) {
            $f11[$i11] = $request->de11[$k11];
            $i11++;
            $k11++;
        }

        $f1_output11 = json_encode($f11);


// HORA 12
        $f12 = array();
        $i12 = 1;
        $k12 = 0;

        while ($i12 <= count($request->de12)) {
            $f12[$i12] = $request->de12[$k12];
            $i12++;
            $k12++;
        }

        $f1_output12 = json_encode($f12);


// HORA 13
        $f13 = array();
        $i13 = 1;
        $k13 = 0;

        while ($i13 <= count($request->de13)) {
            $f13[$i13] = $request->de13[$k13];
            $i13++;
            $k13++;
        }

        $f1_output13 = json_encode($f13);


        $_h1domingo = Tiempo::where('numero_control', 14021073)->first();

        $_h1domingo->domingo_h1 = $f1_output1;
        $_h1domingo->domingo_h2 = $f1_output2;
        $_h1domingo->domingo_h3 = $f1_output3;
        $_h1domingo->domingo_h4 = $f1_output4;
        $_h1domingo->domingo_h5 = $f1_output5;
        $_h1domingo->domingo_h6 = $f1_output6;
        $_h1domingo->domingo_h7 = $f1_output7;
        $_h1domingo->domingo_h8 = $f1_output8;
        $_h1domingo->domingo_h9 = $f1_output9;
        $_h1domingo->domingo_h10 = $f1_output10;
        $_h1domingo->domingo_h11 = $f1_output11;
        $_h1domingo->domingo_h12 = $f1_output12;
        $_h1domingo->domingo_h13 = $f1_output13;

        $_h1domingo->save();

        return redirect()->back();

    }

    public function edit_t2_2(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->sueno1)) {
            $f1[$i] = $request->sueno1[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->comida1)) {
            $f2[$i2] = $request->comida1[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->clase1)) {
            $f3[$i3] = $request->clase1[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->estudio1)) {
            $f4[$i4] = $request->estudio1[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->rel1)) {
            $f5[$i5] = $request->rel1[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->soc1)) {
            $f6[$i6] = $request->soc1[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->dep1)) {
            $f7[$i7] = $request->dep1[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->per1)) {
            $f8[$i8] = $request->per1[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);


        $lunes = Tiempo::where('numero_control', 14021073)->first();

        $lunes->sueno_1 = $f1_output1;
        $lunes->comida_1 = $f1_output2;
        $lunes->clase_1 = $f1_output3;
        $lunes->estudio_1 = $f1_output4;
        $lunes->rel_1 = $f1_output5;
        $lunes->soc_1 = $f1_output6;
        $lunes->dep_1 = $f1_output7;
        $lunes->per_1 = $f1_output8;


        $lunes->save();

        return redirect()->back();

    }


    public function edit_t2_3(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->sueno2)) {
            $f1[$i] = $request->sueno2[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->comida2)) {
            $f2[$i2] = $request->comida2[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->clase2)) {
            $f3[$i3] = $request->clase2[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->estudio2)) {
            $f4[$i4] = $request->estudio2[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->rel2)) {
            $f5[$i5] = $request->rel2[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->soc2)) {
            $f6[$i6] = $request->soc2[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->dep2)) {
            $f7[$i7] = $request->dep2[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->per2)) {
            $f8[$i8] = $request->per2[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);


        $lunes = Tiempo::where('numero_control', 14021073)->first();

        $lunes->sueno_2 = $f1_output1;
        $lunes->comida_2 = $f1_output2;
        $lunes->clase_2 = $f1_output3;
        $lunes->estudio_2 = $f1_output4;
        $lunes->rel_2 = $f1_output5;
        $lunes->soc_2 = $f1_output6;
        $lunes->dep_2 = $f1_output7;
        $lunes->per_2 = $f1_output8;


        $lunes->save();

        return redirect()->back();

    }

    public function edit_t2_4(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->sueno3)) {
            $f1[$i] = $request->sueno3[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->comida3)) {
            $f2[$i2] = $request->comida3[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->clase3)) {
            $f3[$i3] = $request->clase3[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->estudio3)) {
            $f4[$i4] = $request->estudio3[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->rel3)) {
            $f5[$i5] = $request->rel3[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->soc3)) {
            $f6[$i6] = $request->soc3[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->dep3)) {
            $f7[$i7] = $request->dep3[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->per3)) {
            $f8[$i8] = $request->per3[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);


        $lunes = Tiempo::where('numero_control', 14021073)->first();

        $lunes->sueno_3 = $f1_output1;
        $lunes->comida_3 = $f1_output2;
        $lunes->clase_3 = $f1_output3;
        $lunes->estudio_3 = $f1_output4;
        $lunes->rel_3 = $f1_output5;
        $lunes->soc_3 = $f1_output6;
        $lunes->dep_3 = $f1_output7;
        $lunes->per_3 = $f1_output8;


        $lunes->save();

        return redirect()->back();

    }


    public function edit_t2_5(Request $request)
    {


//// HORA 1
        $f1 = array();
        $i = 1;
        $k = 0;

        while ($i <= count($request->sueno4)) {
            $f1[$i] = $request->sueno4[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2 = array();
        $i2 = 1;
        $k2 = 0;

        while ($i2 <= count($request->comida4)) {
            $f2[$i2] = $request->comida4[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3 = array();
        $i3 = 1;
        $k3 = 0;

        while ($i3 <= count($request->clase4)) {
            $f3[$i3] = $request->clase4[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4 = array();
        $i4 = 1;
        $k4 = 0;

        while ($i4 <= count($request->estudio4)) {
            $f4[$i4] = $request->estudio4[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5 = array();
        $i5 = 1;
        $k5 = 0;

        while ($i5 <= count($request->rel4)) {
            $f5[$i5] = $request->rel4[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6 = array();
        $i6 = 1;
        $k6 = 0;

        while ($i6 <= count($request->soc4)) {
            $f6[$i6] = $request->soc4[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);


// HORA 7
        $f7 = array();
        $i7 = 1;
        $k7 = 0;

        while ($i7 <= count($request->dep4)) {
            $f7[$i7] = $request->dep4[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8 = array();
        $i8 = 1;
        $k8 = 0;

        while ($i8 <= count($request->per4)) {
            $f8[$i8] = $request->per4[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);


        $lunes = Tiempo::where('numero_control', 14021073)->first();

        $lunes->sueno_4 = $f1_output1;
        $lunes->comida_4 = $f1_output2;
        $lunes->clase_4 = $f1_output3;
        $lunes->estudio_4 = $f1_output4;
        $lunes->rel_4 = $f1_output5;
        $lunes->soc_4 = $f1_output6;
        $lunes->dep_4 = $f1_output7;
        $lunes->per_4 = $f1_output8;

        $lunes->save();

        return redirect()->back();

    }


    public function edit_t2_6(Request $request){


//// HORA 1
        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->sueno5)){
            $f1[$i]=$request->sueno5[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2=array();
        $i2=1;
        $k2=0;

        while($i2<=count($request->comida5)){
            $f2[$i2]=$request->comida5[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3=array();
        $i3=1;
        $k3=0;

        while($i3<=count($request->clase5)){
            $f3[$i3]=$request->clase5[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4=array();
        $i4=1;
        $k4=0;

        while($i4<=count($request->estudio5)){
            $f4[$i4]=$request->estudio5[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5=array();
        $i5=1;
        $k5=0;

        while($i5<=count($request->rel5)){
            $f5[$i5]=$request->rel5[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6=array();
        $i6=1;
        $k6=0;

        while($i6<=count($request->soc5)){
            $f6[$i6]=$request->soc5[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);



// HORA 7
        $f7=array();
        $i7=1;
        $k7=0;

        while($i7<=count($request->dep5)){
            $f7[$i7]=$request->dep5[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8=array();
        $i8=1;
        $k8=0;

        while($i8<=count($request->per5)){
            $f8[$i8]=$request->per5[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);



        $lunes = Tiempo::where('numero_control', 14021073)->first();

        $lunes->sueno_5 = $f1_output1;
        $lunes->comida_5 = $f1_output2;
        $lunes->clase_5 = $f1_output3;
        $lunes->estudio_5 = $f1_output4;
        $lunes->rel_5 = $f1_output5;
        $lunes->soc_5 = $f1_output6;
        $lunes->dep_5 = $f1_output7;
        $lunes->per_5 = $f1_output8;

        $lunes->save();

        return redirect()->back();

    }

    public function edit_t2_7(Request $request){


//// HORA 1
        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->sueno6)){
            $f1[$i]=$request->sueno6[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2=array();
        $i2=1;
        $k2=0;

        while($i2<=count($request->comida6)){
            $f2[$i2]=$request->comida6[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3=array();
        $i3=1;
        $k3=0;

        while($i3<=count($request->clase6)){
            $f3[$i3]=$request->clase6[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4=array();
        $i4=1;
        $k4=0;

        while($i4<=count($request->estudio6)){
            $f4[$i4]=$request->estudio6[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5=array();
        $i5=1;
        $k5=0;

        while($i5<=count($request->rel6)){
            $f5[$i5]=$request->rel6[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6=array();
        $i6=1;
        $k6=0;

        while($i6<=count($request->soc6)){
            $f6[$i6]=$request->soc6[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);



// HORA 7
        $f7=array();
        $i7=1;
        $k7=0;

        while($i7<=count($request->dep6)){
            $f7[$i7]=$request->dep6[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8=array();
        $i8=1;
        $k8=0;

        while($i8<=count($request->per6)){
            $f8[$i8]=$request->per6[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);



        $sabado = Tiempo::where('numero_control', 14021073)->first();

        $sabado->sueno_6 = $f1_output1;
        $sabado->comida_6 = $f1_output2;
        $sabado->clase_6 = $f1_output3;
        $sabado->estudio_6 = $f1_output4;
        $sabado->rel_6 = $f1_output5;
        $sabado->soc_6 = $f1_output6;
        $sabado->dep_6 = $f1_output7;
        $sabado->per_6 = $f1_output8;

        $sabado->save();

        return redirect()->back();

    }

    public function edit_t2_8(Request $request){


//// HORA 1
        $f1=array();
        $i=1;
        $k=0;

        while($i<=count($request->sueno7)){
            $f1[$i]=$request->sueno7[$k];
            $i++;
            $k++;
        }

        $f1_output1 = json_encode($f1);

// HORA 2
        $f2=array();
        $i2=1;
        $k2=0;

        while($i2<=count($request->comida7)){
            $f2[$i2]=$request->comida7[$k2];
            $i2++;
            $k2++;
        }

        $f1_output2 = json_encode($f2);


// HORA 3
        $f3=array();
        $i3=1;
        $k3=0;

        while($i3<=count($request->clase7)){
            $f3[$i3]=$request->clase7[$k3];
            $i3++;
            $k3++;
        }

        $f1_output3 = json_encode($f3);

// HORA 4
        $f4=array();
        $i4=1;
        $k4=0;

        while($i4<=count($request->estudio7)){
            $f4[$i4]=$request->estudio7[$k4];
            $i4++;
            $k4++;
        }

        $f1_output4 = json_encode($f4);


// HORA 5
        $f5=array();
        $i5=1;
        $k5=0;

        while($i5<=count($request->rel7)){
            $f5[$i5]=$request->rel7[$k5];
            $i5++;
            $k5++;
        }

        $f1_output5 = json_encode($f5);

// HORA 6
        $f6=array();
        $i6=1;
        $k6=0;

        while($i6<=count($request->soc7)){
            $f6[$i6]=$request->soc7[$k6];
            $i6++;
            $k6++;
        }

        $f1_output6 = json_encode($f6);



// HORA 7
        $f7=array();
        $i7=1;
        $k7=0;

        while($i7<=count($request->dep7)){
            $f7[$i7]=$request->dep7[$k7];
            $i7++;
            $k7++;
        }

        $f1_output7 = json_encode($f7);

// HORA 8
        $f8=array();
        $i8=1;
        $k8=0;

        while($i8<=count($request->per7)){
            $f8[$i8]=$request->per7[$k8];
            $i8++;
            $k8++;
        }

        $f1_output8 = json_encode($f8);



        $domingo = Tiempo::where('numero_control', 14021073)->first();

        $domingo->sueno_7 = $f1_output1;
        $domingo->comida_7 = $f1_output2;
        $domingo->clase_7 = $f1_output3;
        $domingo->estudio_7 = $f1_output4;
        $domingo->rel_7 = $f1_output5;
        $domingo->soc_7 = $f1_output6;
        $domingo->dep_7 = $f1_output7;
        $domingo->per_7 = $f1_output8;

        $domingo->save();

        return redirect()->back();

    }


}

