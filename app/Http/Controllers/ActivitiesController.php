<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Alumno;
use App\Amenaza;
use App\Carrera;
use App\Debilidad;
use App\Desarrollohumano;
use App\Ensayo;
use App\Esquema;
use App\Fortaleza;
use App\Habilidad;
use App\Humanointegral;
use App\Inferencia;
use App\Inteligencia;
use App\Linea;
use App\Mapa;
use App\Mat;
use App\Memoria;
use App\Oportunidad;
use App\Pensamiento;
use App\Relacion;
use App\Tiempo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\MagicConst\Line;

class ActivitiesController extends Controller
{
    //

    public function create_acts(){

        // Variables de entrega

        $l1 = 0;

        $f1 = 0;
        $f2 = 0;
        $f3 = 0;
        $f4 = 0;

        $d1 = 0;
        $d2 = 0;
        $d3 = 0;
        $d4 = 0;

        $a1 = 0;
        $a2 = 0;
        $a3 = 0;
        $a4 = 0;
        $a5 = 0;

        $o1 = 0;
        $o2 = 0;
        $o3 = 0;
        $o4 = 0;

        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        $t7 = 0;

        $t11 = 0;
        $t22 = 0;
        $t33 = 0;
        $t44 = 0;
        $t55 = 0;
        $t66 = 0;
        $t77 = 0;

        $shi = 0;

        $dhi1 = 0;
        $dhi2= 0;
        $dhi3= 0;
        $dhi4= 0;
        $dhi5= 0;
        $dhi6= 0;

        $int1 = 0;
        $int2 = 0;
        $int3 = 0;
        $int4 = 0;

        $he1 = 0;

        $mem1 = 0;
        $mem2 = 0;
        $mem3 = 0;
        $mem4 = 0;

        $hp1 = 0;
        $hp2 = 0;
        $hp3 = 0;
        $hp4 = 0;
        $hp5 = 0;

        $map1 = 0;

        $esq1 = 0;
        $esq2 = 0;

        $res1 = 0;

        $mat1 = 0;
        $mat2 = 0;

        $log1 = 0;
        $log2 = 0;

        $rel1 = 0;
        $rel2 = 0;
        $rel3 = 0;
        $rel4 = 0;
        $rel5 = 0;

        // Variables de revisión

        $rl1 = 0;


        $rf1 = 0;
        $rf2 = 0;
        $rf3 = 0;
        $rf4 = 0;

        $rd1 = 0;
        $rd2 = 0;
        $rd3 = 0;
        $rd4 = 0;

        $ra1 = 0;
        $ra2 = 0;
        $ra3 = 0;
        $ra4 = 0;
        $ra5 = 0;

        $ro1 = 0;
        $ro2 = 0;
        $ro3 = 0;
        $ro4 = 0;

        $rt1 = 0;
        $rt2 = 0;
        $rt3 = 0;
        $rt4 = 0;
        $rt5 = 0;
        $rt6 = 0;
        $rt7 = 0;

        $rt11 = 0;
        $rt22 = 0;
        $rt33 = 0;
        $rt44 = 0;
        $rt55 = 0;
        $rt66 = 0;
        $rt77 = 0;

        $rshi = 0;

        $rdhi1 = 0;
        $rdhi2= 0;
        $rdhi3= 0;
        $rdhi4= 0;
        $rdhi5= 0;
        $rdhi6= 0;

        $rint1 = 0;
        $rint2 = 0;
        $rint3 = 0;
        $rint4 = 0;

        $rhe1 = 0;

        $rmem1 = 0;
        $rmem2 = 0;
        $rmem3 = 0;
        $rmem4 = 0;

        $rhp1 = 0;
        $rhp2 = 0;
        $rhp3 = 0;
        $rhp4 = 0;
        $rhp5 = 0;

        $rmap1 = 0;

        $resq1 = 0;
        $resq2 = 0;

        $rres1 = 0;

        $rmat1 = 0;
        $rmat2 = 0;

        $rlog1 = 0;
        $rlog2 = 0;

        $rrel1 = 0;
        $rrel2 = 0;
        $rrel3 = 0;
        $rrel4 = 0;
        $rrel5 = 0;


// Variables de calificación
        $cl1 = 0;

        $cf1 = 0;
        $cf2 = 0;
        $cf3 = 0;
        $cf4 = 0;

        $cd1 = 0;
        $cd2 = 0;
        $cd3 = 0;
        $cd4 = 0;

        $ca1 = 0;
        $ca2 = 0;
        $ca3 = 0;
        $ca4 = 0;
        $ca5 = 0;

        $co1 = 0;
        $co2 = 0;
        $co3 = 0;
        $co4 = 0;

        $ct1 = 0;
        $ct2 = 0;
        $ct3 = 0;
        $ct4 = 0;
        $ct5 = 0;
        $ct6 = 0;
        $ct7 = 0;

        $ct11 = 0;
        $ct22 = 0;
        $ct33 = 0;
        $ct44 = 0;
        $ct55 = 0;
        $ct66 = 0;
        $ct77 = 0;

        $cshi = 0;

        $cdhi1 = 0;
        $cdhi2 = 0;
        $cdhi3 = 0;
        $cdhi4 = 0;
        $cdhi5 = 0;
        $cdhi6 = 0;

        $cint1 = 0;
        $cint2 = 0;
        $cint3 = 0;
        $cint4 = 0;

        $che1 = 0;

        $cmem1 = 0;
        $cmem2 = 0;
        $cmem3 = 0;
        $cmem4 = 0;

        $chp1 = 0;
        $chp2 = 0;
        $chp3 = 0;
        $chp4 = 0;
        $chp5 = 0;

        $cmap1 = 0;

        $cesq1 = 0;
        $cesq2 = 0;

        $cres1 = 0;

        $cmat1 = 0;
        $cmat2 = 0;

        $clog1 = 0;
        $clog2 = 0;

        $crel1 = 0;
        $crel2 = 0;
        $crel3 = 0;
        $crel4 = 0;
        $crel5 = 0;

        // Variables de retroalimentación

        $ral1 = '';

        $raf1 = '';
        $raf2 = '';
        $raf3 = '';
        $raf4 = '';

        $rad1 = '';
        $rad2 = '';
        $rad3 = '';
        $rad4 = '';

        $raa1 = '';
        $raa2 = '';
        $raa3 = '';
        $raa4 = '';
        $raa5 = '';

        $rao1 = '';
        $rao2 = '';
        $rao3 = '';
        $rao4 = '';

        $rat1 = '';
        $rat2 = '';
        $rat3 = '';
        $rat4 = '';
        $rat5 = '';
        $rat6 = '';
        $rat7 = '';

        $rat11 = '';
        $rat22 = '';
        $rat33 = '';
        $rat44 = '';
        $rat55 = '';
        $rat66 = '';
        $rat77 = '';

        $rashi = '';

        $radhi1 = '';
        $radhi2= '';
        $radhi3= '';
        $radhi4= '';
        $radhi5= '';
        $radhi6= '';

        $raint1 = '';
        $raint2 = '';
        $raint3 = '';
        $raint4 = '';

        $rahe1 = '';

        $ramem1 = '';
        $ramem2 = '';
        $ramem3 = '';
        $ramem4 = '';

        $rahp1 = '';
        $rahp2 = '';
        $rahp3 = '';
        $rahp4 = '';
        $rahp5 = '';

        $ramap1 = '';

        $raesq1 = '';
        $raesq2 = '';

        $rares1 = '';

        $ramat1 = '';
        $ramat2 = '';

        $ralog1 = '';
        $ralog2 = '';

        $rarel1 = '';
        $rarel2 = '';
        $rarel3 = '';
        $rarel4 = '';
        $rarel5 = '';

        //avance


        $avance = 0;


        if(Linea::where('numero_control', Auth::user()->numero_control)->exists()){

            $ll = Linea::where('numero_control', Auth::user()->numero_control)->first();

            if($ll->avance_1 != NULL){
                $l1 = 1;
            }

            if($ll->retro_1 != NULL){
                $rl1 = 1;
            }

            $cl1 = $ll->cal_1;

            $ral1 = $ll->retro_1;

            //avance

            if($ll->avance_1 != NULL){
                $avance ++;
            }


        }


            if(Fortaleza::where('numero_control', Auth::user()->numero_control)->exists()){

            $f = Fortaleza::where('numero_control', Auth::user()->numero_control)->first();

            if($f->fortalezas_1 != NULL){
                $f1 = 1;
            }

            if($f->fortalezas_2 != NULL){
                $f2 = 1;
            }

            if($f->fortalezas_3 != NULL){
                $f3 = 1;
            }

            if($f->fortalezas_4 != NULL){
                $f4 = 1;
            }


            //revision

            if($f->retro_1 != NULL){
                $rf1 = 1;
            }

            if($f->retro_2 != NULL){
                $rf2 = 1;
            }

            if($f->retro_3 != NULL){
                $rf3 = 1;
            }

            if($f->retro_4 != NULL){
                $rf4 = 1;
            }

            //calificación

            $cf1 = $f->cal_1;
            $cf2 = $f->cal_2;
            $cf3 = $f->cal_3;
            $cf4 = $f->cal_4;

                //calificación

                $raf1 = $f->retro_1;
                $raf2 = $f->retro_2;
                $raf3 = $f->retro_3;
                $raf4 = $f->retro_4;

        }


        if(Debilidad::where('numero_control', Auth::user()->numero_control)->exists()){

            $d = Debilidad::where('numero_control', Auth::user()->numero_control)->first();

            if($d->debilidads_1 != NULL){
                $d1 = 1;
            }

            if($d->debilidads_2 != NULL){
                $d2 = 1;
            }

            if($d->debilidads_3 != NULL){
                $d3 = 1;
            }

            if($d->debilidads_4 != NULL){
                $d4 = 1;
            }

            //revision

            if($d->retro_1 != NULL){
                $rd1 = 1;
            }

            if($d->retro_2 != NULL){
                $rd2 = 1;
            }

            if($d->retro_3 != NULL){
                $rd3 = 1;
            }

            if($d->retro_4 != NULL){
                $rd4 = 1;
            }

            //calificación

            $cd1 = $d->cal_1;
            $cd2 = $d->cal_2;
            $cd3 = $d->cal_3;
            $cd4 = $d->cal_4;

            //retro

            $rad1 = $d->retro_1;
            $rad2 = $d->retro_2;
            $rad3 = $d->retro_3;
            $rad4 = $d->retro_4;

        }


        if(Amenaza::where('numero_control', Auth::user()->numero_control)->exists()){

            $a = Amenaza::where('numero_control', Auth::user()->numero_control)->first();

            if($a->amenazas_1 != NULL){
                $a1 = 1;
            }
            if($a->amenazas_2 != NULL){
                $a2 = 1;
            }

            if($a->amenazas_3 != NULL){
                $a3 = 1;
            }

            if($a->amenazas_4 != NULL){
                $a4 = 1;
            }

            if($a->amenazas_5 != NULL){
                $a5 = 1;
            }

            //revision

            if($a->retro_1 != NULL){
                $ra1 = 1;
            }

            if($a->retro_2 != NULL){
                $ra2 = 1;
            }

            if($a->retro_3 != NULL){
                $ra3 = 1;
            }

            if($a->retro_4 != NULL){
                $ra4 = 1;
            }

            if($a->retro_5 != NULL){
                $ra5 = 1;
            }

            //calificación

            $ca1 = $a->cal_1;
            $ca2 = $a->cal_2;
            $ca3 = $a->cal_3;
            $ca4 = $a->cal_4;
            $ca5 = $a->cal_5;

            //retro

            $raa1 = $a->retro_1;
            $raa2 = $a->retro_2;
            $raa3 = $a->retro_3;
            $raa4 = $a->retro_4;
            $raa5 = $a->retro_5;
        }


        if(Oportunidad::where('numero_control', Auth::user()->numero_control)->exists()){

            $o = Oportunidad::where('numero_control', Auth::user()->numero_control)->first();

            if($o->oportunidads_1 != NULL){
                $o1 = 1;
            }

            if($o->oportunidads_2 != NULL){
                $o2 = 1;
            }

            if($o->oportunidads_3 != NULL){
                $o3 = 1;
            }

            if($o->oportunidads_4 != NULL){
                $o4 = 1;
            }

            //revision

            if($o->retro_1 != NULL){
                $ro1 = 1;
            }

            if($o->retro_2 != NULL){
                $ro2 = 1;
            }

            if($o->retro_3 != NULL){
                $ro3 = 1;
            }

            if($o->retro_4 != NULL){
                $ro4 = 1;
            }

            //calificación

            $co1 = $o->cal_1;
            $co2 = $o->cal_2;
            $co3 = $o->cal_3;
            $co4 = $o->cal_4;

            //retro
            $rao1 = $o->retro_1;
            $rao2 = $o->retro_2;
            $rao3 = $o->retro_3;
            $rao4 = $o->retro_4;

            //avance

            if($f->fortalezas_1 != NULL && $f->fortalezas_2!= NULL && $f->fortalezas_3 != NULL && $f->fortalezas_4 != NULL && $d->debilidads_1 =! NULL && $d->debilidads_2 =! NULL && $d->debilidads_3 =! NULL && $d->debilidads_4 =! NULL && $a->amenazas_1 =! NULL && $a->amenazas_2 =! NULL && $a->amenazas_3 =! NULL && $a->amenazas_4 =! NULL && $a->amenazas_5 =! NULL && $o->oportunidads_1 != NULL && $o->oportunidads_2 != NULL && $o->oportunidads_3 != NULL && $o->oportunidads_4 != NULL){
                $avance ++;
            }

        }


        if(Tiempo::where('numero_control', Auth::user()->numero_control)->exists()){

            $t = Tiempo::where('numero_control', Auth::user()->numero_control)->first();

            if($t->avance_lunes_1 != NULL){
                $t1 = 1;
            }

            if($t->avance_martes_1 != NULL){
                $t2 = 1;
            }

            if($t->avance_miercoles_1 != NULL){
                $t3 = 1;
            }

            if($t->avance_jueves_1 != NULL){
                $t4 = 1;
            }

            if($t->avance_viernes_1 != NULL){
                $t5 = 1;
            }

            if($t->avance_sabado_1 != NULL){
                $t6 = 1;
            }

            if($t->avance_domingo_1 != NULL){
                $t7 = 1;
            }


            //revision

            if($t->retro_1 != NULL){
                $rt1 = 1;
            }

            if($t->retro_2 != NULL){
                $rt2 = 1;
            }

            if($t->retro_3 != NULL){
                $rt3 = 1;
            }

            if($t->retro_4 != NULL){
                $rt4 = 1;
            }

            if($t->retro_5 != NULL){
                $rt5 = 1;
            }

            if($t->retro_6 != NULL){
                $rt6 = 1;
            }

            if($t->retro_7 != NULL){
                $rt7 = 1;
            }

            //calificación

            $ct1 = $t->cal_1;
            $ct2 = $t->cal_2;
            $ct3 = $t->cal_3;
            $ct4 = $t->cal_4;
            $ct5 = $t->cal_5;
            $ct6 = $t->cal_6;
            $ct7 = $t->cal_7;

            //retro

            $rat1 = $t->retro_1;
            $rat2 = $t->retro_2;
            $rat3 = $t->retro_3;
            $rat4 = $t->retro_4;
            $rat5 = $t->retro_5;
            $rat6 = $t->retro_6;
            $rat7 = $t->retro_7;

        }


        if(Tiempo::where('numero_control', Auth::user()->numero_control)->exists()){

            $tt = Tiempo::where('numero_control', Auth::user()->numero_control)->first();

            if($tt->avance_lunes_2 != NULL){
                $t11 = 1;
            }

            if($tt->avance_martes_2 != NULL){
                $t22 = 1;
            }

            if($tt->avance_miercoles_2 != NULL){
                $t33 = 1;
            }

            if($tt->avance_jueves_2 != NULL){
                $t44 = 1;
            }

            if($tt->avance_viernes_2 != NULL){
                $t55 = 1;
            }

            if($tt->avance_sabado_2 != NULL){
                $t66 = 1;
            }

            if($tt->avance_domingo_2 != NULL){
                $t77 = 1;
            }

            //revision

            if($tt->retro_8 != NULL){
                $rt11 = 1;
            }

            if($tt->retro_9 != NULL){
                $rt22 = 1;
            }

            if($tt->retro_10 != NULL){
                $rt33 = 1;
            }

            if($tt->retro_11 != NULL){
                $rt44 = 1;
            }

            if($tt->retro_12 != NULL){
                $rt55 = 1;
            }

            if($tt->retro_13 != NULL){
                $rt66 = 1;
            }

            if($tt->retro_14 != NULL){
                $rt77 = 1;
            }

            //calificación

            $ct11 = $tt->cal_8;
            $ct22 = $tt->cal_9;
            $ct33 = $tt->cal_10;
            $ct44 = $tt->cal_11;
            $ct55 = $tt->cal_12;
            $ct66 = $tt->cal_13;
            $ct77 = $tt->cal_14;

            //retro

            $rat11 = $tt->retro_8;
            $rat22 = $tt->retro_9;
            $rat33 = $tt->retro_10;
            $rat44 = $tt->retro_11;
            $rat55 = $tt->retro_12;
            $rat66 = $tt->retro_13;
            $rat77 = $tt->retro_14;

            //avance

            if($t->avance_lunes_1 != NULL && $t->avance_martes_1 != NULL && $t->avance_miercoles_1 != NULL && $t->avance_jueves_1 != NULL && $t->avance_viernes_1 != NULL && $t->avance_sabado_1 != NULL && $t->avance_domingo_1 != NULL && $tt->avance_lunes_2 != NULL && $tt->avance_martes_2 != NULL && $tt->avance_miercoles_2 != NULL && $tt->avance_jueves_2 != NULL && $tt->avance_viernes_2 != NULL && $tt->avance_sabado_2 != NULL && $tt->avance_domingo_2 != NULL){
                $avance++;
            }
        }

        if(Humanointegral::where('numero_control', Auth::user()->numero_control)->exists()){

            $hi = Humanointegral::where('numero_control', Auth::user()->numero_control)->first();

            if($hi->pres_per != NULL && $hi->salud != NULL && $hi->simpatia != NULL){
                $shi = 1;
                $avance++;
            }

            //revision

            if($hi->retro != NULL){
                $rshi = 1;
            }

            //calificación
            $cshi =$hi->cal_final;

            //retro

            $rashi =$hi->retro;

        }


        if(Desarrollohumano::where('numero_control', Auth::user()->numero_control)->exists()){

            $dhi = Desarrollohumano::where('numero_control', Auth::user()->numero_control)->first();

            if($dhi->avance_1 != NULL){
                $dhi1 = 1;
            }

            if($dhi->avance_2 != NULL){
                $dhi2 = 1;
            }

            if($dhi->avance_3 != NULL){
                $dhi3 = 1;
            }

            if($dhi->avance_4 != NULL){
                $dhi4 = 1;
            }

            if($dhi->avance_5 != NULL){
                $dhi5 = 1;
            }

            if($dhi->avance_6 != NULL){
                $dhi6 = 1;
            }

            //revision

            if($dhi->retro_1 != NULL){
                $rdhi1 = 1;
            }

            if($dhi->retro_2 != NULL){
                $rdhi2 = 1;
            }

            if($dhi->retro_3 != NULL){
                $rdhi3 = 1;
            }

            if($dhi->retro_4 != NULL){
                $rdhi4 = 1;
            }

            if($dhi->retro_5 != NULL){
                $rdhi5 = 1;
            }

            if($dhi->retro_6 != NULL){
                $rdhi6 = 1;
            }

            //calificación

            $cdhi1 = $dhi->cal_1;
            $cdhi2 = $dhi->cal_2;
            $cdhi3 = $dhi->cal_3;
            $cdhi4 = $dhi->cal_4;
            $cdhi5 = $dhi->cal_5;
            $cdhi6 = $dhi->cal_6;

            //retro

            $radhi1 = $dhi->retro_1;
            $radhi2 = $dhi->retro_2;
            $radhi3 = $dhi->retro_3;
            $radhi4 = $dhi->retro_4;
            $radhi5 = $dhi->retro_5;
            $radhi6 = $dhi->retro_6;

            //avance

            if($dhi->avance_1 != NULL && $dhi->avance_2 != NULL && $dhi->avance_3 != NULL && $dhi->avance_4 != NULL && $dhi->avance_5 != NULL && $dhi->avance_6 != NULL){
                $avance++;
            }

        }


        if(Inteligencia::where('numero_control', Auth::user()->numero_control)->exists()) {

            $int = Inteligencia::where('numero_control', Auth::user()->numero_control)->first();

            if ($int->avance_1 != NULL) {
                $int1 = 1;
            }

            if ($int->avance_2 != NULL) {
                $int2 = 1;
            }

            if ($int->avance_3 != NULL) {
                $int3 = 1;
            }

            if ($int->avance_4 != NULL) {
                $int4 = 1;
            }

            //revision

            if ($int->retro_1 != NULL) {
                $rint1 = 1;
            }

            if ($int->retro_2 != NULL) {
                $rint2 = 1;
            }

            if ($int->retro_3 != NULL) {
                $rint3 = 1;
            }

            if ($int->retro_4 != NULL) {
                $rint4 = 1;
            }

            //calificación

            $cint1 = $int->cal_1;
            $cint2 = $int->cal_2;
            $cint3 = $int->cal_3;
            $cint4 = $int->cal_4;

            //retro

            $raint1 = $int->retro_1;
            $raint2 = $int->retro_2;
            $raint3 = $int->retro_3;
            $raint4 = $int->retro_4;

            //avance

            if($int->avance_1 != NULL && $int->avance_2 != NULL && $int->avance_3 != NULL && $int->avance_4 != NULL){
                $avance++;
            }


        }

        if(Habilidad::where('numero_control', Auth::user()->numero_control)->exists()){

            $hst = Habilidad::where('numero_control', Auth::user()->numero_control)->first();

            if($hst->h1 != NULL && $hst->h2 != NULL && $hst->h3 != NULL && $hst->h4 != NULL && $hst->h5 != NULL && $hst->h6 != NULL && $hst->h7 != NULL && $hst->h8 != NULL && $hst->h9 != NULL){
                $he1 = 1;
                $avance++;
            }

            //revision

            if ($hst->retro != NULL) {
                $rhe1 = 1;
            }

            //calificación
            $che1 = $hst->cal_final;

            //retro
            $rahe1 = $hst->retro;

        }

        if(Memoria::where('numero_control', Auth::user()->numero_control)->exists()){

            $mem = Memoria::where('numero_control', Auth::user()->numero_control)->first();

            if($mem->avance_1 != NULL){
                $mem1 = 1;
            }

            if($mem->avance_2 != NULL){
                $mem2 = 1;
            }

            if($mem->avance_3 != NULL){
                $mem3 = 1;
            }

            if($mem->avance_4 != NULL){
                $mem4 = 1;
            }

            //revision

            if ($mem->retro_1 != NULL) {
                $rmem1 = 1;
            }

            if ($mem->retro_2 != NULL) {
                $rmem2 = 1;
            }

            if ($mem->retro_3 != NULL) {
                $rmem3 = 1;
            }

            if ($mem->retro_4 != NULL) {
                $rmem4 = 1;
            }

            //calificación

            $cmem1 = $mem->cal_1;
            $cmem2 = $mem->cal_2;
            $cmem3 = $mem->cal_3;
            $cmem4 = $mem->cal_4;

            //retro
            $ramem1 = $mem->retro_1;
            $ramem2 = $mem->retro_2;
            $ramem3 = $mem->retro_3;
            $ramem4 = $mem->retro_4;

            //avance

            if($mem->avance_1 != NULL && $mem->avance_2 != NULL && $mem->avance_3 != NULL && $mem->avance_4 != NULL){
                $avance++;
            }


        }

        if(Pensamiento::where('numero_control', Auth::user()->numero_control)->exists()){

            $hp = Pensamiento::where('numero_control', Auth::user()->numero_control)->first();

            if($hp->avance_1 != NULL){
                $hp1 = 1;
            }

            if($hp->avance_2 != NULL){
                $hp2 = 1;
            }

            if($hp->avance_3 != NULL){
                $hp3 = 1;
            }

            if($hp->avance_4 != NULL){
                $hp4 = 1;
            }

            //revision

            if ($hp->retro_1 != NULL) {
                $rhp1 = 1;
            }

            if ($hp->retro_2 != NULL) {
                $rhp2 = 1;
            }

            if ($hp->retro_3 != NULL) {
                $rhp3 = 1;
            }

            if ($hp->retro_4 != NULL) {
                $rhp4 = 1;
            }

            //calificación

            $chp1 = $hp->cal_1;
            $chp2 = $hp->cal_2;
            $chp3 = $hp->cal_3;
            $chp4 = $hp->cal_4;

            //retro
            $rahp1 = $hp->retro_1;
            $rahp2 = $hp->retro_2;
            $rahp3 = $hp->retro_3;
            $rahp4 = $hp->retro_4;

            //avance

            if($hp->avance_1 != NULL && $hp->avance_2 != NULL && $hp->avance_3 != NULL && $hp->avance_4 != NULL){
                $avance++;
            }

        }

        if(Mapa::where('numero_control', Auth::user()->numero_control)->exists()){

            $mp = Mapa::where('numero_control', Auth::user()->numero_control)->first();

            if($mp->ruta != NULL){
                $map1 = 1;
                $avance++;
            }

            if($mp->retro_1 != NULL){
                $rmap1 = 1;
            }

            //calificación

            $cmap1 = $mp->cal_1;

            //retro
            $ramap1 = $mp->retro_1;

        }

        if(Esquema::where('numero_control', Auth::user()->numero_control)->exists()){

            $esq = Esquema::where('numero_control', Auth::user()->numero_control)->first();

            if($esq->avance_1 != NULL){
                $esq1 = 1;
            }

            if($esq->avance_2 != NULL){
                $esq2 = 1;
            }

            //revisión

            if($esq->retro_1 != NULL){
                $resq1 = 1;
            }

            if($esq->retro_2 != NULL){
                $resq2 = 1;
            }

            //calificación

            $cesq1 = $esq->cal_1;
            $cesq2 = $esq->cal_2;

            //retro
            $raesq1 = $esq->retro_1;
            $raesq2 = $esq->retro_2;

            //avance

            if($esq->avance_1 != NULL && $esq->avance_2 != NULL){
                $avance++;
            }

        }

        if(Ensayo::where('numero_control', Auth::user()->numero_control)->exists()){

            $ensy = Ensayo::where('numero_control', Auth::user()->numero_control)->first();

            if($ensy->ens != NULL){
                $res1 = 1;
                $avance++;
            }

            //revisión

            if($ensy->retro_1 != NULL){
                $rres1 = 1;
            }

            //calificación

            $cres1 = $ensy->cal_1;

            //retro
            $rares1 = $ensy->retro_1;

        }



        if(Mat::where('numero_control', Auth::user()->numero_control)->exists()){

            $mat = Mat::where('numero_control', Auth::user()->numero_control)->first();

            if($mat->avance_1 != NULL){
                $mat1 = 1;
            }

            if($mat->avance_2 != NULL){
                $mat2 = 1;
            }

            //revisión

            if($mat->retro_1 != NULL){
                $rmat1 = 1;
            }

            if($mat->retro_2 != NULL){
                $rmat2 = 1;
            }

            //calificación

            $cmat1 = $mat->cal_1;
            $cmat2 = $mat->cal_2;

            //retro
            $ramat1 = $mat->retro_1;
            $ramat2 = $mat->retro_2;

            //avance

            if($mat->avance_1 != NULL && $mat->avance_2 != NULL){
                $avance++;
            }

        }

        if(Inferencia::where('numero_control', Auth::user()->numero_control)->exists()){

            $log = Inferencia::where('numero_control', Auth::user()->numero_control)->first();

            if($log->avance_1 != NULL){
                $log1 = 1;
            }


            if($log->avance_2 != NULL){
                $log2 = 1;
            }

            //revisión

            if($log->retro_1 != NULL){
                $rlog1 = 1;
            }


            if($log->retro_2 != NULL){
                $rlog2 = 1;
            }

            //calificación

            $clog1 = $log->cal_1;
            $clog2 = $log->cal_2;

            //retro
            $ralog1 = $log->retro_1;
            $ralog2 = $log->retro_2;

            //avance

            if($log->avance_1 != NULL && $log->avance_2 != NULL){
                $avance++;
            }

        }


        if(Relacion::where('numero_control', Auth::user()->numero_control)->exists()){

            $rel = Relacion::where('numero_control', Auth::user()->numero_control)->first();

            if($rel->avance_1 != NULL){
                $rel1 = 1;
            }

            if($rel->avance_2 != NULL){
                $rel2 = 1;
            }

            if($rel->avance_3 != NULL){
                $rel3 = 1;
            }

            if($rel->avance_4 != NULL){
                $rel4 = 1;
            }

            if($rel->avance_5 != NULL){
                $rel5 = 1;
            }

            //revisión

            if($rel->retro_1 != NULL){
                $rrel1 = 1;
            }

            if($rel->retro_2 != NULL){
                $rrel2 = 1;
            }

            if($rel->retro_3 != NULL){
                $rrel3 = 1;
            }

            if($rel->retro_4 != NULL){
                $rrel4 = 1;
            }

            if($rel->retro_5 != NULL){
                $rrel5 = 1;
            }

            //calificación

            $crel1 = $rel->cal_1;
            $crel2 = $rel->cal_2;
            $crel3 = $rel->cal_3;
            $crel4 = $rel->cal_4;
            $crel5 = $rel->cal_5;

            //retro

            $rarel1 = $rel->retro_1;
            $rarel2 = $rel->retro_2;
            $rarel3 = $rel->retro_3;
            $rarel4 = $rel->retro_4;
            $rarel5 = $rel->retro_5;

            //avance

            if($rel->avance_1 != NULL && $rel->avance_2 != NULL && $rel->avance_3 != NULL && $rel->avance_4 != NULL && $rel->avance_5 != NULL){
                $avance++;
            }

        }
        //Promedios

        $p_foda1 = ((($cf1+$cf2+$cf3+$cf4)/4)+(($cd1+$cd2+$cd3+$cd4)/4)+(($ca1+$ca2+$ca3+$ca4+$ca5)/5)+(($cf1+$cf2+$cf3+$cf4)/4))/4;
        $p_foda = number_format((float)$p_foda1, 2, '.', '');

        $p_tiempo1 = ($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7+$ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/14;
        $p_tiempo = number_format((float)$p_tiempo1, 2, '.', '');

        $p = (($cl1)+(($cf1+$cf2+$cf3+$cf4)/4)+(($cd1+$cd2+$cd3+$cd4)/4)+(($ca1+$ca2+$ca3+$ca4+$ca5)/5)+(($co1+$co2+$co3+$co4)/4)+(($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7)/7)+(($ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/7)+$cshi+(($cdhi1+$cdhi2+$cdhi3+$cdhi4+$cdhi5+$cdhi6)/6)+(($cint1+$cint2+$cint3+$cint4)/4)+($che1+($cmem1+$cmem2+$cmem3+$cmem4)/4)+(($chp1+$chp2+$chp3+$chp4)/4)+($cmap1+($cesq1+$cesq2)/2)+$cres1+(($cmat1+$cmat2)/2)+(($clog1+$clog2)/2)+(($crel1+$crel2+$crel3+$crel4+$crel5)/5))/20;

        $pf = number_format((float)$p, 2, '.', '');

        $p_a1 = ($avance*100)/15;

        $p_a = number_format((float)$p_a1, 2, '.', '');



        return view('activities.index_actividades_alumno', compact('f1','f2','f3','f4', 'd1', 'd2', 'd3', 'd4', 'a1', 'a2', 'a3', 'a4', 'a5','o1','o2','o3','o4','t1','t2','t3','t4','t5','t6','t7','t11','t22','t33','t44','t55','t66','t77','shi','dhi1','dhi2','dhi3','dhi4','dhi5','dhi6','int1','int2','int3','int4','he1','mem1','mem2','mem3','mem4','hp1','hp2','hp3','hp4','hp5','map1','esq1','esq2','res1','mat1','mat2','log1','log2','rel1','rel2','rel3','rel4','rel5','rf1','rf2','rf3','rf4','rd1', 'rd2', 'rd3', 'rd4', 'ra1', 'ra2', 'ra3', 'ra4', 'ra5','ro1','ro2','ro3','ro4','rt1','rt2','rt3','rt4','rt5','rt6','rt7','rt11','rt22','rt33','rt44','rt55','rt66','rt77','rshi','rdhi1','rdhi2','rdhi3','rdhi4','rdhi5','rdhi6','rint1','rint2','rint3','rint4','rhe1','rmem1','rmem2','rmem3','rmem4','rhp1','rhp2','rhp3','rhp4','rhp5','rmap1','resq1','resq2','rres1','rmat1','rmat2','rlog1','rlog2','rrel1','rrel2','rrel3','rrel4','rrel5','cf1','cf2','cf3','cf4','cd1','cd2','cd3','cd4','ca1','ca2','ca3','ca4','ca5','co1','co2','co3','co4','ct1','ct2','ct3','ct4','ct5','ct6','ct7','ct11','ct22','ct33','ct44','ct55','ct66','ct77','cshi','cdhi1','cdhi2','cdhi3','cdhi4','cdhi5','cdhi6','cint1','cint2','cint3','cint4','che1','cmem1','cmem2','cmem3','cmem4','chp1','chp2','chp3','chp4','cmap1','cesq1','cesq2','cres1','cmat1','cmat2','clog1','clog2','crel1','crel2','crel3','crel4','crel5','l1','rl1','cl1','ral1','raf1','raf2','raf3','raf4','rad1','rad2','rad3','rad4','raa1','raa2','raa3','raa4','raa5','rao1','rao2','rao3','rao4','rat1','rat2','rat3','rat4','rat5','rat6','rat7','rat11','rat22','rat33','rat44','rat55','rat66','rat77','rashi','radhi1','radhi2','radhi3','radhi4','radhi5','radhi6','raint1','raint2','raint3','raint4','rahe1','ramem1','ramem2','ramem3','ramem4','rahp1','rahp2','rahp3','rahp4','ramap1','raesq1','raesq2','rares1','ramat1','ramat2','ralog1','ralog2','rarel1','rarel2','rarel3','rarel4','rarel5','pf','p_foda','p_tiempo','p_a'));

    }





    public function create_acts_tutor($nc){

        // Variables de entrega

        $l1 = 0;

        $f1 = 0;
        $f2 = 0;
        $f3 = 0;
        $f4 = 0;

        $d1 = 0;
        $d2 = 0;
        $d3 = 0;
        $d4 = 0;

        $a1 = 0;
        $a2 = 0;
        $a3 = 0;
        $a4 = 0;
        $a5 = 0;

        $o1 = 0;
        $o2 = 0;
        $o3 = 0;
        $o4 = 0;

        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        $t7 = 0;

        $t11 = 0;
        $t22 = 0;
        $t33 = 0;
        $t44 = 0;
        $t55 = 0;
        $t66 = 0;
        $t77 = 0;

        $shi = 0;

        $dhi1 = 0;
        $dhi2= 0;
        $dhi3= 0;
        $dhi4= 0;
        $dhi5= 0;
        $dhi6= 0;

        $int1 = 0;
        $int2 = 0;
        $int3 = 0;
        $int4 = 0;

        $he1 = 0;

        $mem1 = 0;
        $mem2 = 0;
        $mem3 = 0;
        $mem4 = 0;

        $hp1 = 0;
        $hp2 = 0;
        $hp3 = 0;
        $hp4 = 0;
        $hp5 = 0;

        $map1 = 0;

        $esq1 = 0;
        $esq2 = 0;

        $res1 = 0;

        $mat1 = 0;
        $mat2 = 0;

        $log1 = 0;
        $log2 = 0;

        $rel1 = 0;
        $rel2 = 0;
        $rel3 = 0;
        $rel4 = 0;
        $rel5 = 0;

        // Variables de revisión

        $rl1 = 0;


        $rf1 = 0;
        $rf2 = 0;
        $rf3 = 0;
        $rf4 = 0;

        $rd1 = 0;
        $rd2 = 0;
        $rd3 = 0;
        $rd4 = 0;

        $ra1 = 0;
        $ra2 = 0;
        $ra3 = 0;
        $ra4 = 0;
        $ra5 = 0;

        $ro1 = 0;
        $ro2 = 0;
        $ro3 = 0;
        $ro4 = 0;

        $rt1 = 0;
        $rt2 = 0;
        $rt3 = 0;
        $rt4 = 0;
        $rt5 = 0;
        $rt6 = 0;
        $rt7 = 0;

        $rt11 = 0;
        $rt22 = 0;
        $rt33 = 0;
        $rt44 = 0;
        $rt55 = 0;
        $rt66 = 0;
        $rt77 = 0;

        $rshi = 0;

        $rdhi1 = 0;
        $rdhi2= 0;
        $rdhi3= 0;
        $rdhi4= 0;
        $rdhi5= 0;
        $rdhi6= 0;

        $rint1 = 0;
        $rint2 = 0;
        $rint3 = 0;
        $rint4 = 0;

        $rhe1 = 0;

        $rmem1 = 0;
        $rmem2 = 0;
        $rmem3 = 0;
        $rmem4 = 0;

        $rhp1 = 0;
        $rhp2 = 0;
        $rhp3 = 0;
        $rhp4 = 0;
        $rhp5 = 0;

        $rmap1 = 0;

        $resq1 = 0;
        $resq2 = 0;

        $rres1 = 0;

        $rmat1 = 0;
        $rmat2 = 0;

        $rlog1 = 0;
        $rlog2 = 0;

        $rrel1 = 0;
        $rrel2 = 0;
        $rrel3 = 0;
        $rrel4 = 0;
        $rrel5 = 0;


// Variables de calificación
        $cl1 = 0;

        $cf1 = 0;
        $cf2 = 0;
        $cf3 = 0;
        $cf4 = 0;

        $cd1 = 0;
        $cd2 = 0;
        $cd3 = 0;
        $cd4 = 0;

        $ca1 = 0;
        $ca2 = 0;
        $ca3 = 0;
        $ca4 = 0;
        $ca5 = 0;

        $co1 = 0;
        $co2 = 0;
        $co3 = 0;
        $co4 = 0;

        $ct1 = 0;
        $ct2 = 0;
        $ct3 = 0;
        $ct4 = 0;
        $ct5 = 0;
        $ct6 = 0;
        $ct7 = 0;

        $ct11 = 0;
        $ct22 = 0;
        $ct33 = 0;
        $ct44 = 0;
        $ct55 = 0;
        $ct66 = 0;
        $ct77 = 0;

        $cshi = 0;

        $cdhi1 = 0;
        $cdhi2 = 0;
        $cdhi3 = 0;
        $cdhi4 = 0;
        $cdhi5 = 0;
        $cdhi6 = 0;

        $cint1 = 0;
        $cint2 = 0;
        $cint3 = 0;
        $cint4 = 0;

        $che1 = 0;

        $cmem1 = 0;
        $cmem2 = 0;
        $cmem3 = 0;
        $cmem4 = 0;

        $chp1 = 0;
        $chp2 = 0;
        $chp3 = 0;
        $chp4 = 0;
        $chp5 = 0;

        $cmap1 = 0;

        $cesq1 = 0;
        $cesq2 = 0;

        $cres1 = 0;

        $cmat1 = 0;
        $cmat2 = 0;

        $clog1 = 0;
        $clog2 = 0;

        $crel1 = 0;
        $crel2 = 0;
        $crel3 = 0;
        $crel4 = 0;
        $crel5 = 0;

        // Variables de retroalimentación

        $ral1 = '';

        $raf1 = '';
        $raf2 = '';
        $raf3 = '';
        $raf4 = '';

        $rad1 = '';
        $rad2 = '';
        $rad3 = '';
        $rad4 = '';

        $raa1 = '';
        $raa2 = '';
        $raa3 = '';
        $raa4 = '';
        $raa5 = '';

        $rao1 = '';
        $rao2 = '';
        $rao3 = '';
        $rao4 = '';

        $rat1 = '';
        $rat2 = '';
        $rat3 = '';
        $rat4 = '';
        $rat5 = '';
        $rat6 = '';
        $rat7 = '';

        $rat11 = '';
        $rat22 = '';
        $rat33 = '';
        $rat44 = '';
        $rat55 = '';
        $rat66 = '';
        $rat77 = '';

        $rashi = '';

        $radhi1 = '';
        $radhi2= '';
        $radhi3= '';
        $radhi4= '';
        $radhi5= '';
        $radhi6= '';

        $raint1 = '';
        $raint2 = '';
        $raint3 = '';
        $raint4 = '';

        $rahe1 = '';

        $ramem1 = '';
        $ramem2 = '';
        $ramem3 = '';
        $ramem4 = '';

        $rahp1 = '';
        $rahp2 = '';
        $rahp3 = '';
        $rahp4 = '';
        $rahp5 = '';

        $ramap1 = '';

        $raesq1 = '';
        $raesq2 = '';

        $rares1 = '';

        $ramat1 = '';
        $ramat2 = '';

        $ralog1 = '';
        $ralog2 = '';

        $rarel1 = '';
        $rarel2 = '';
        $rarel3 = '';
        $rarel4 = '';
        $rarel5 = '';

        //avance


        $avance = 0;


        if(Linea::where('numero_control', $nc)->exists()){

            $ll = Linea::where('numero_control', $nc)->first();

            if($ll->avance_1 != NULL){
                $l1 = 1;
            }

            if($ll->retro_1 != NULL){
                $rl1 = 1;
            }

            $cl1 = $ll->cal_1;

            $ral1 = $ll->retro_1;

            //avance

            if($ll->avance_1 != NULL){
                $avance ++;
            }


        }


        if(Fortaleza::where('numero_control', $nc)->exists()){

            $f = Fortaleza::where('numero_control', $nc)->first();

            if($f->fortalezas_1 != NULL){
                $f1 = 1;
            }

            if($f->fortalezas_2 != NULL){
                $f2 = 1;
            }

            if($f->fortalezas_3 != NULL){
                $f3 = 1;
            }

            if($f->fortalezas_4 != NULL){
                $f4 = 1;
            }


            //revision

            if($f->retro_1 != NULL){
                $rf1 = 1;
            }

            if($f->retro_2 != NULL){
                $rf2 = 1;
            }

            if($f->retro_3 != NULL){
                $rf3 = 1;
            }

            if($f->retro_4 != NULL){
                $rf4 = 1;
            }

            //calificación

            $cf1 = $f->cal_1;
            $cf2 = $f->cal_2;
            $cf3 = $f->cal_3;
            $cf4 = $f->cal_4;

            //calificación

            $raf1 = $f->retro_1;
            $raf2 = $f->retro_2;
            $raf3 = $f->retro_3;
            $raf4 = $f->retro_4;

        }


        if(Debilidad::where('numero_control', $nc)->exists()){

            $d = Debilidad::where('numero_control', $nc)->first();

            if($d->debilidads_1 != NULL){
                $d1 = 1;
            }

            if($d->debilidads_2 != NULL){
                $d2 = 1;
            }

            if($d->debilidads_3 != NULL){
                $d3 = 1;
            }

            if($d->debilidads_4 != NULL){
                $d4 = 1;
            }

            //revision

            if($d->retro_1 != NULL){
                $rd1 = 1;
            }

            if($d->retro_2 != NULL){
                $rd2 = 1;
            }

            if($d->retro_3 != NULL){
                $rd3 = 1;
            }

            if($d->retro_4 != NULL){
                $rd4 = 1;
            }

            //calificación

            $cd1 = $d->cal_1;
            $cd2 = $d->cal_2;
            $cd3 = $d->cal_3;
            $cd4 = $d->cal_4;

            //retro

            $rad1 = $d->retro_1;
            $rad2 = $d->retro_2;
            $rad3 = $d->retro_3;
            $rad4 = $d->retro_4;

        }


        if(Amenaza::where('numero_control', $nc)->exists()){

            $a = Amenaza::where('numero_control', $nc)->first();

            if($a->amenazas_1 != NULL){
                $a1 = 1;
            }
            if($a->amenazas_2 != NULL){
                $a2 = 1;
            }

            if($a->amenazas_3 != NULL){
                $a3 = 1;
            }

            if($a->amenazas_4 != NULL){
                $a4 = 1;
            }

            if($a->amenazas_5 != NULL){
                $a5 = 1;
            }

            //revision

            if($a->retro_1 != NULL){
                $ra1 = 1;
            }

            if($a->retro_2 != NULL){
                $ra2 = 1;
            }

            if($a->retro_3 != NULL){
                $ra3 = 1;
            }

            if($a->retro_4 != NULL){
                $ra4 = 1;
            }

            if($a->retro_5 != NULL){
                $ra5 = 1;
            }

            //calificación

            $ca1 = $a->cal_1;
            $ca2 = $a->cal_2;
            $ca3 = $a->cal_3;
            $ca4 = $a->cal_4;
            $ca5 = $a->cal_5;

            //retro

            $raa1 = $a->retro_1;
            $raa2 = $a->retro_2;
            $raa3 = $a->retro_3;
            $raa4 = $a->retro_4;
            $raa5 = $a->retro_5;
        }


        if(Oportunidad::where('numero_control', $nc)->exists()){

            $o = Oportunidad::where('numero_control', $nc)->first();

            if($o->oportunidads_1 != NULL){
                $o1 = 1;
            }

            if($o->oportunidads_2 != NULL){
                $o2 = 1;
            }

            if($o->oportunidads_3 != NULL){
                $o3 = 1;
            }

            if($o->oportunidads_4 != NULL){
                $o4 = 1;
            }

            //revision

            if($o->retro_1 != NULL){
                $ro1 = 1;
            }

            if($o->retro_2 != NULL){
                $ro2 = 1;
            }

            if($o->retro_3 != NULL){
                $ro3 = 1;
            }

            if($o->retro_4 != NULL){
                $ro4 = 1;
            }

            //calificación

            $co1 = $o->cal_1;
            $co2 = $o->cal_2;
            $co3 = $o->cal_3;
            $co4 = $o->cal_4;

            //retro
            $rao1 = $o->retro_1;
            $rao2 = $o->retro_2;
            $rao3 = $o->retro_3;
            $rao4 = $o->retro_4;

            //avance

            if($f->fortalezas_1 != NULL && $f->fortalezas_2!= NULL && $f->fortalezas_3 != NULL && $f->fortalezas_4 != NULL && $d->debilidads_1 =! NULL && $d->debilidads_2 =! NULL && $d->debilidads_3 =! NULL && $d->debilidads_4 =! NULL && $a->amenazas_1 =! NULL && $a->amenazas_2 =! NULL && $a->amenazas_3 =! NULL && $a->amenazas_4 =! NULL && $a->amenazas_5 =! NULL && $o->oportunidads_1 != NULL && $o->oportunidads_2 != NULL && $o->oportunidads_3 != NULL && $o->oportunidads_4 != NULL){
                $avance ++;
            }

        }


        if(Tiempo::where('numero_control', $nc)->exists()){

            $t = Tiempo::where('numero_control', $nc)->first();

            if($t->avance_lunes_1 != NULL){
                $t1 = 1;
            }

            if($t->avance_martes_1 != NULL){
                $t2 = 1;
            }

            if($t->avance_miercoles_1 != NULL){
                $t3 = 1;
            }

            if($t->avance_jueves_1 != NULL){
                $t4 = 1;
            }

            if($t->avance_viernes_1 != NULL){
                $t5 = 1;
            }

            if($t->avance_sabado_1 != NULL){
                $t6 = 1;
            }

            if($t->avance_domingo_1 != NULL){
                $t7 = 1;
            }


            //revision

            if($t->retro_1 != NULL){
                $rt1 = 1;
            }

            if($t->retro_2 != NULL){
                $rt2 = 1;
            }

            if($t->retro_3 != NULL){
                $rt3 = 1;
            }

            if($t->retro_4 != NULL){
                $rt4 = 1;
            }

            if($t->retro_5 != NULL){
                $rt5 = 1;
            }

            if($t->retro_6 != NULL){
                $rt6 = 1;
            }

            if($t->retro_7 != NULL){
                $rt7 = 1;
            }

            //calificación

            $ct1 = $t->cal_1;
            $ct2 = $t->cal_2;
            $ct3 = $t->cal_3;
            $ct4 = $t->cal_4;
            $ct5 = $t->cal_5;
            $ct6 = $t->cal_6;
            $ct7 = $t->cal_7;

            //retro

            $rat1 = $t->retro_1;
            $rat2 = $t->retro_2;
            $rat3 = $t->retro_3;
            $rat4 = $t->retro_4;
            $rat5 = $t->retro_5;
            $rat6 = $t->retro_6;
            $rat7 = $t->retro_7;

        }


        if(Tiempo::where('numero_control', $nc)->exists()){

            $tt = Tiempo::where('numero_control', $nc)->first();

            if($tt->avance_lunes_2 != NULL){
                $t11 = 1;
            }

            if($tt->avance_martes_2 != NULL){
                $t22 = 1;
            }

            if($tt->avance_miercoles_2 != NULL){
                $t33 = 1;
            }

            if($tt->avance_jueves_2 != NULL){
                $t44 = 1;
            }

            if($tt->avance_viernes_2 != NULL){
                $t55 = 1;
            }

            if($tt->avance_sabado_2 != NULL){
                $t66 = 1;
            }

            if($tt->avance_domingo_2 != NULL){
                $t77 = 1;
            }

            //revision

            if($tt->retro_8 != NULL){
                $rt11 = 1;
            }

            if($tt->retro_9 != NULL){
                $rt22 = 1;
            }

            if($tt->retro_10 != NULL){
                $rt33 = 1;
            }

            if($tt->retro_11 != NULL){
                $rt44 = 1;
            }

            if($tt->retro_12 != NULL){
                $rt55 = 1;
            }

            if($tt->retro_13 != NULL){
                $rt66 = 1;
            }

            if($tt->retro_14 != NULL){
                $rt77 = 1;
            }

            //calificación

            $ct11 = $tt->cal_8;
            $ct22 = $tt->cal_9;
            $ct33 = $tt->cal_10;
            $ct44 = $tt->cal_11;
            $ct55 = $tt->cal_12;
            $ct66 = $tt->cal_13;
            $ct77 = $tt->cal_14;

            //retro

            $rat11 = $tt->retro_8;
            $rat22 = $tt->retro_9;
            $rat33 = $tt->retro_10;
            $rat44 = $tt->retro_11;
            $rat55 = $tt->retro_12;
            $rat66 = $tt->retro_13;
            $rat77 = $tt->retro_14;

            //avance

            if($t->avance_lunes_1 != NULL && $t->avance_martes_1 != NULL && $t->avance_miercoles_1 != NULL && $t->avance_jueves_1 != NULL && $t->avance_viernes_1 != NULL && $t->avance_sabado_1 != NULL && $t->avance_domingo_1 != NULL && $tt->avance_lunes_2 != NULL && $tt->avance_martes_2 != NULL && $tt->avance_miercoles_2 != NULL && $tt->avance_jueves_2 != NULL && $tt->avance_viernes_2 != NULL && $tt->avance_sabado_2 != NULL && $tt->avance_domingo_2 != NULL){
                $avance++;
            }
        }

        if(Humanointegral::where('numero_control', $nc)->exists()){

            $hi = Humanointegral::where('numero_control', $nc)->first();

            if($hi->pres_per != NULL && $hi->salud != NULL && $hi->simpatia != NULL){
                $shi = 1;
                $avance++;
            }

            //revision

            if($hi->retro != NULL){
                $rshi = 1;
            }

            //calificación
            $cshi =$hi->cal_final;

            //retro

            $rashi =$hi->retro;

        }


        if(Desarrollohumano::where('numero_control', $nc)->exists()){

            $dhi = Desarrollohumano::where('numero_control', $nc)->first();

            if($dhi->avance_1 != NULL){
                $dhi1 = 1;
            }

            if($dhi->avance_2 != NULL){
                $dhi2 = 1;
            }

            if($dhi->avance_3 != NULL){
                $dhi3 = 1;
            }

            if($dhi->avance_4 != NULL){
                $dhi4 = 1;
            }

            if($dhi->avance_5 != NULL){
                $dhi5 = 1;
            }

            if($dhi->avance_6 != NULL){
                $dhi6 = 1;
            }

            //revision

            if($dhi->retro_1 != NULL){
                $rdhi1 = 1;
            }

            if($dhi->retro_2 != NULL){
                $rdhi2 = 1;
            }

            if($dhi->retro_3 != NULL){
                $rdhi3 = 1;
            }

            if($dhi->retro_4 != NULL){
                $rdhi4 = 1;
            }

            if($dhi->retro_5 != NULL){
                $rdhi5 = 1;
            }

            if($dhi->retro_6 != NULL){
                $rdhi6 = 1;
            }

            //calificación

            $cdhi1 = $dhi->cal_1;
            $cdhi2 = $dhi->cal_2;
            $cdhi3 = $dhi->cal_3;
            $cdhi4 = $dhi->cal_4;
            $cdhi5 = $dhi->cal_5;
            $cdhi6 = $dhi->cal_6;

            //retro

            $radhi1 = $dhi->retro_1;
            $radhi2 = $dhi->retro_2;
            $radhi3 = $dhi->retro_3;
            $radhi4 = $dhi->retro_4;
            $radhi5 = $dhi->retro_5;
            $radhi6 = $dhi->retro_6;

            //avance

            if($dhi->avance_1 != NULL && $dhi->avance_2 != NULL && $dhi->avance_3 != NULL && $dhi->avance_4 != NULL && $dhi->avance_5 != NULL && $dhi->avance_6 != NULL){
                $avance++;
            }

        }


        if(Inteligencia::where('numero_control', $nc)->exists()) {

            $int = Inteligencia::where('numero_control', $nc)->first();

            if ($int->avance_1 != NULL) {
                $int1 = 1;
            }

            if ($int->avance_2 != NULL) {
                $int2 = 1;
            }

            if ($int->avance_3 != NULL) {
                $int3 = 1;
            }

            if ($int->avance_4 != NULL) {
                $int4 = 1;
            }

            //revision

            if ($int->retro_1 != NULL) {
                $rint1 = 1;
            }

            if ($int->retro_2 != NULL) {
                $rint2 = 1;
            }

            if ($int->retro_3 != NULL) {
                $rint3 = 1;
            }

            if ($int->retro_4 != NULL) {
                $rint4 = 1;
            }

            //calificación

            $cint1 = $int->cal_1;
            $cint2 = $int->cal_2;
            $cint3 = $int->cal_3;
            $cint4 = $int->cal_4;

            //retro

            $raint1 = $int->retro_1;
            $raint2 = $int->retro_2;
            $raint3 = $int->retro_3;
            $raint4 = $int->retro_4;

            //avance

            if($int->avance_1 != NULL && $int->avance_2 != NULL && $int->avance_3 != NULL && $int->avance_4 != NULL){
                $avance++;
            }


        }

        if(Habilidad::where('numero_control', $nc)->exists()){

            $hst = Habilidad::where('numero_control', $nc)->first();

            if($hst->h1 != NULL && $hst->h2 != NULL && $hst->h3 != NULL && $hst->h4 != NULL && $hst->h5 != NULL && $hst->h6 != NULL && $hst->h7 != NULL && $hst->h8 != NULL && $hst->h9 != NULL){
                $he1 = 1;
                $avance++;
            }

            //revision

            if ($hst->retro != NULL) {
                $rhe1 = 1;
            }

            //calificación
            $che1 = $hst->cal_final;

            //retro
            $rahe1 = $hst->retro;

        }

        if(Memoria::where('numero_control', $nc)->exists()){

            $mem = Memoria::where('numero_control', $nc)->first();

            if($mem->avance_1 != NULL){
                $mem1 = 1;
            }

            if($mem->avance_2 != NULL){
                $mem2 = 1;
            }

            if($mem->avance_3 != NULL){
                $mem3 = 1;
            }

            if($mem->avance_4 != NULL){
                $mem4 = 1;
            }

            //revision

            if ($mem->retro_1 != NULL) {
                $rmem1 = 1;
            }

            if ($mem->retro_2 != NULL) {
                $rmem2 = 1;
            }

            if ($mem->retro_3 != NULL) {
                $rmem3 = 1;
            }

            if ($mem->retro_4 != NULL) {
                $rmem4 = 1;
            }

            //calificación

            $cmem1 = $mem->cal_1;
            $cmem2 = $mem->cal_2;
            $cmem3 = $mem->cal_3;
            $cmem4 = $mem->cal_4;

            //retro
            $ramem1 = $mem->retro_1;
            $ramem2 = $mem->retro_2;
            $ramem3 = $mem->retro_3;
            $ramem4 = $mem->retro_4;

            //avance

            if($mem->avance_1 != NULL && $mem->avance_2 != NULL && $mem->avance_3 != NULL && $mem->avance_4 != NULL){
                $avance++;
            }


        }

        if(Pensamiento::where('numero_control', $nc)->exists()){

            $hp = Pensamiento::where('numero_control', $nc)->first();

            if($hp->avance_1 != NULL){
                $hp1 = 1;
            }

            if($hp->avance_2 != NULL){
                $hp2 = 1;
            }

            if($hp->avance_3 != NULL){
                $hp3 = 1;
            }

            if($hp->avance_4 != NULL){
                $hp4 = 1;
            }

            //revision

            if ($hp->retro_1 != NULL) {
                $rhp1 = 1;
            }

            if ($hp->retro_2 != NULL) {
                $rhp2 = 1;
            }

            if ($hp->retro_3 != NULL) {
                $rhp3 = 1;
            }

            if ($hp->retro_4 != NULL) {
                $rhp4 = 1;
            }

            //calificación

            $chp1 = $hp->cal_1;
            $chp2 = $hp->cal_2;
            $chp3 = $hp->cal_3;
            $chp4 = $hp->cal_4;

            //retro
            $rahp1 = $hp->retro_1;
            $rahp2 = $hp->retro_2;
            $rahp3 = $hp->retro_3;
            $rahp4 = $hp->retro_4;

            //avance

            if($hp->avance_1 != NULL && $hp->avance_2 != NULL && $hp->avance_3 != NULL && $hp->avance_4 != NULL){
                $avance++;
            }

        }

        if(Mapa::where('numero_control', $nc)->exists()){

            $mp = Mapa::where('numero_control', $nc)->first();

            if($mp->ruta != NULL){
                $map1 = 1;
                $avance++;
            }

            if($mp->retro_1 != NULL){
                $rmap1 = 1;
            }

            //calificación

            $cmap1 = $mp->cal_1;

            //retro
            $ramap1 = $mp->retro_1;

        }

        if(Esquema::where('numero_control', $nc)->exists()){

            $esq = Esquema::where('numero_control', $nc)->first();

            if($esq->avance_1 != NULL){
                $esq1 = 1;
            }

            if($esq->avance_2 != NULL){
                $esq2 = 1;
            }

            //revisión

            if($esq->retro_1 != NULL){
                $resq1 = 1;
            }

            if($esq->retro_2 != NULL){
                $resq2 = 1;
            }

            //calificación

            $cesq1 = $esq->cal_1;
            $cesq2 = $esq->cal_2;

            //retro
            $raesq1 = $esq->retro_1;
            $raesq2 = $esq->retro_2;

            //avance

            if($esq->avance_1 != NULL && $esq->avance_2 != NULL){
                $avance++;
            }

        }

        if(Ensayo::where('numero_control', $nc)->exists()){

            $ensy = Ensayo::where('numero_control', $nc)->first();

            if($ensy->ens != NULL){
                $res1 = 1;
                $avance++;
            }

            //revisión

            if($ensy->retro_1 != NULL){
                $rres1 = 1;
            }

            //calificación

            $cres1 = $ensy->cal_1;

            //retro
            $rares1 = $ensy->retro_1;

        }



        if(Mat::where('numero_control', $nc)->exists()){

            $mat = Mat::where('numero_control', $nc)->first();

            if($mat->avance_1 != NULL){
                $mat1 = 1;
            }

            if($mat->avance_2 != NULL){
                $mat2 = 1;
            }

            //revisión

            if($mat->retro_1 != NULL){
                $rmat1 = 1;
            }

            if($mat->retro_2 != NULL){
                $rmat2 = 1;
            }

            //calificación

            $cmat1 = $mat->cal_1;
            $cmat2 = $mat->cal_2;

            //retro
            $ramat1 = $mat->retro_1;
            $ramat2 = $mat->retro_2;

            //avance

            if($mat->avance_1 != NULL && $mat->avance_2 != NULL){
                $avance++;
            }

        }

        if(Inferencia::where('numero_control', $nc)->exists()){

            $log = Inferencia::where('numero_control', $nc)->first();

            if($log->avance_1 != NULL){
                $log1 = 1;
            }


            if($log->avance_2 != NULL){
                $log2 = 1;
            }

            //revisión

            if($log->retro_1 != NULL){
                $rlog1 = 1;
            }


            if($log->retro_2 != NULL){
                $rlog2 = 1;
            }

            //calificación

            $clog1 = $log->cal_1;
            $clog2 = $log->cal_2;

            //retro
            $ralog1 = $log->retro_1;
            $ralog2 = $log->retro_2;

            //avance

            if($log->avance_1 != NULL && $log->avance_2 != NULL){
                $avance++;
            }

        }


        if(Relacion::where('numero_control', $nc)->exists()){

            $rel = Relacion::where('numero_control', $nc)->first();

            if($rel->avance_1 != NULL){
                $rel1 = 1;
            }

            if($rel->avance_2 != NULL){
                $rel2 = 1;
            }

            if($rel->avance_3 != NULL){
                $rel3 = 1;
            }

            if($rel->avance_4 != NULL){
                $rel4 = 1;
            }

            if($rel->avance_5 != NULL){
                $rel5 = 1;
            }

            //revisión

            if($rel->retro_1 != NULL){
                $rrel1 = 1;
            }

            if($rel->retro_2 != NULL){
                $rrel2 = 1;
            }

            if($rel->retro_3 != NULL){
                $rrel3 = 1;
            }

            if($rel->retro_4 != NULL){
                $rrel4 = 1;
            }

            if($rel->retro_5 != NULL){
                $rrel5 = 1;
            }

            //calificación

            $crel1 = $rel->cal_1;
            $crel2 = $rel->cal_2;
            $crel3 = $rel->cal_3;
            $crel4 = $rel->cal_4;
            $crel5 = $rel->cal_5;

            //retro

            $rarel1 = $rel->retro_1;
            $rarel2 = $rel->retro_2;
            $rarel3 = $rel->retro_3;
            $rarel4 = $rel->retro_4;
            $rarel5 = $rel->retro_5;

            //avance

            if($rel->avance_1 != NULL && $rel->avance_2 != NULL && $rel->avance_3 != NULL && $rel->avance_4 != NULL && $rel->avance_5 != NULL){
                $avance++;
            }

        }
        //Promedios

        $p_foda1 = ((($cf1+$cf2+$cf3+$cf4)/4)+(($cd1+$cd2+$cd3+$cd4)/4)+(($ca1+$ca2+$ca3+$ca4+$ca5)/5)+(($cf1+$cf2+$cf3+$cf4)/4))/4;
        $p_foda = number_format((float)$p_foda1, 2, '.', '');

        $p_tiempo1 = (($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7)/7)+(($ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/7);
        $p_tiempo = number_format((float)$p_tiempo1, 2, '.', '');

        $p = (($cl1)+(($cf1+$cf2+$cf3+$cf4)/4)+(($cd1+$cd2+$cd3+$cd4)/4)+(($ca1+$ca2+$ca3+$ca4+$ca5)/5)+(($co1+$co2+$co3+$co4)/4)+(($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7)/7)+(($ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/7)+$cshi+(($cdhi1+$cdhi2+$cdhi3+$cdhi4+$cdhi5+$cdhi6)/6)+(($cint1+$cint2+$cint3+$cint4)/4)+($che1+($cmem1+$cmem2+$cmem3+$cmem4)/4)+(($chp1+$chp2+$chp3+$chp4)/4)+($cmap1+($cesq1+$cesq2)/2)+$cres1+(($cmat1+$cmat2)/2)+(($clog1+$clog2)/2)+(($crel1+$crel2+$crel3+$crel4+$crel5)/5))/20;

        $pf = number_format((float)$p, 2, '.', '');

        $p_a1 = ($avance*100)/15;

        $p_a = number_format((float)$p_a1, 2, '.', '');

        $alu = Alumno::where('numero_control', $nc)->first();

        return view('tutor.activities.avance_individual_alumno', compact('f1','f2','f3','f4', 'd1', 'd2', 'd3', 'd4', 'a1', 'a2', 'a3', 'a4', 'a5','o1','o2','o3','o4','t1','t2','t3','t4','t5','t6','t7','t11','t22','t33','t44','t55','t66','t77','shi','dhi1','dhi2','dhi3','dhi4','dhi5','dhi6','int1','int2','int3','int4','he1','mem1','mem2','mem3','mem4','hp1','hp2','hp3','hp4','hp5','map1','esq1','esq2','res1','mat1','mat2','log1','log2','rel1','rel2','rel3','rel4','rel5','rf1','rf2','rf3','rf4','rd1', 'rd2', 'rd3', 'rd4', 'ra1', 'ra2', 'ra3', 'ra4', 'ra5','ro1','ro2','ro3','ro4','rt1','rt2','rt3','rt4','rt5','rt6','rt7','rt11','rt22','rt33','rt44','rt55','rt66','rt77','rshi','rdhi1','rdhi2','rdhi3','rdhi4','rdhi5','rdhi6','rint1','rint2','rint3','rint4','rhe1','rmem1','rmem2','rmem3','rmem4','rhp1','rhp2','rhp3','rhp4','rhp5','rmap1','resq1','resq2','rres1','rmat1','rmat2','rlog1','rlog2','rrel1','rrel2','rrel3','rrel4','rrel5','cf1','cf2','cf3','cf4','cd1','cd2','cd3','cd4','ca1','ca2','ca3','ca4','ca5','co1','co2','co3','co4','ct1','ct2','ct3','ct4','ct5','ct6','ct7','ct11','ct22','ct33','ct44','ct55','ct66','ct77','cshi','cdhi1','cdhi2','cdhi3','cdhi4','cdhi5','cdhi6','cint1','cint2','cint3','cint4','che1','cmem1','cmem2','cmem3','cmem4','chp1','chp2','chp3','chp4','cmap1','cesq1','cesq2','cres1','cmat1','cmat2','clog1','clog2','crel1','crel2','crel3','crel4','crel5','l1','rl1','cl1','ral1','raf1','raf2','raf3','raf4','rad1','rad2','rad3','rad4','raa1','raa2','raa3','raa4','raa5','rao1','rao2','rao3','rao4','rat1','rat2','rat3','rat4','rat5','rat6','rat7','rat11','rat22','rat33','rat44','rat55','rat66','rat77','rashi','radhi1','radhi2','radhi3','radhi4','radhi5','radhi6','raint1','raint2','raint3','raint4','rahe1','ramem1','ramem2','ramem3','ramem4','rahp1','rahp2','rahp3','rahp4','ramap1','raesq1','raesq2','rares1','ramat1','ramat2','ralog1','ralog2','rarel1','rarel2','rarel3','rarel4','rarel5','pf','p_foda','p_tiempo','p_a','alu'));

    }

    public function create_avance_grupo($c){

        $l1 = 0;

        $f1 = 0;
        $f2 = 0;
        $f3 = 0;
        $f4 = 0;
        $ft = 0;
        $pr_f = 0;

        $d1 = 0;
        $d2 = 0;
        $d3 = 0;
        $d4 = 0;
        $dt = 0;
        $pr_d = 0;


        $a1 = 0;
        $a2 = 0;
        $a3 = 0;
        $a4 = 0;
        $a5 = 0;
        $at = 0;
        $pr_a = 0;


        $o1 = 0;
        $o2 = 0;
        $o3 = 0;
        $o4 = 0;
        $ot = 0;
        $s_tot = 0;
        $pr_o = 0;
        $pr_t_foda = 0;


        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        $t7 = 0;
        $t_tot = 0;
        $pr_t = 0;


        $t11 = 0;
        $t22 = 0;
        $t33 = 0;
        $t44 = 0;
        $t55 = 0;
        $t66 = 0;
        $t77 = 0;
        $tt_tot = 0;
        $s_tot2 = 0;
        $pr_tt = 0;
        $pr_t_t = 0;



        $shi = 0;
        $shit = 0;
        $pr_shi = 0;


        $dhi1 = 0;
        $dhi2= 0;
        $dhi3= 0;
        $dhi4= 0;
        $dhi5= 0;
        $dhi6= 0;
        $dhit= 0;
        $pr_dhi = 0;


        $int1 = 0;
        $int2 = 0;
        $int3 = 0;
        $int4 = 0;
        $intt = 0;
        $pr_int = 0;


        $he1 = 0;
        $het = 0;
        $pr_he = 0;


        $mem1 = 0;
        $mem2 = 0;
        $mem3 = 0;
        $mem4 = 0;
        $memt = 0;
        $pr_mem = 0;

        $hp1 = 0;
        $hp2 = 0;
        $hp3 = 0;
        $hp4 = 0;
        $hp5 = 0;
        $hpt = 0;
        $pr_hp = 0;


        $map1 = 0;
        $mapt = 0;
        $pr_map = 0;

        $esq1 = 0;
        $esq2 = 0;
        $esqt = 0;
        $pr_esq = 0;


        $res1 = 0;
        $rest = 0;
        $pr_res = 0;


        $mat1 = 0;
        $mat2 = 0;
        $matt = 0;
        $pr_mat = 0;


        $log1 = 0;
        $log2 = 0;
        $logt = 0;
        $pr_log = 0;


        $rel1 = 0;
        $rel2 = 0;
        $rel3 = 0;
        $rel4 = 0;
        $rel5 = 0;
        $relt = 0;
        $pr_rel = 0;


        // Variables de revisión

        $rl1 = 0;


        $rf1 = 0;
        $rf2 = 0;
        $rf3 = 0;
        $rf4 = 0;

        $rd1 = 0;
        $rd2 = 0;
        $rd3 = 0;
        $rd4 = 0;

        $ra1 = 0;
        $ra2 = 0;
        $ra3 = 0;
        $ra4 = 0;
        $ra5 = 0;

        $ro1 = 0;
        $ro2 = 0;
        $ro3 = 0;
        $ro4 = 0;

        $rt1 = 0;
        $rt2 = 0;
        $rt3 = 0;
        $rt4 = 0;
        $rt5 = 0;
        $rt6 = 0;
        $rt7 = 0;

        $rt11 = 0;
        $rt22 = 0;
        $rt33 = 0;
        $rt44 = 0;
        $rt55 = 0;
        $rt66 = 0;
        $rt77 = 0;

        $rshi = 0;

        $rdhi1 = 0;
        $rdhi2= 0;
        $rdhi3= 0;
        $rdhi4= 0;
        $rdhi5= 0;
        $rdhi6= 0;

        $rint1 = 0;
        $rint2 = 0;
        $rint3 = 0;
        $rint4 = 0;

        $rhe1 = 0;

        $rmem1 = 0;
        $rmem2 = 0;
        $rmem3 = 0;
        $rmem4 = 0;

        $rhp1 = 0;
        $rhp2 = 0;
        $rhp3 = 0;
        $rhp4 = 0;
        $rhp5 = 0;

        $rmap1 = 0;

        $resq1 = 0;
        $resq2 = 0;

        $rres1 = 0;

        $rmat1 = 0;
        $rmat2 = 0;

        $rlog1 = 0;
        $rlog2 = 0;

        $rrel1 = 0;
        $rrel2 = 0;
        $rrel3 = 0;
        $rrel4 = 0;
        $rrel5 = 0;


// Variables de calificación
        $cl1 = 0;

        $cf1 = 0;
        $cf2 = 0;
        $cf3 = 0;
        $cf4 = 0;

        $cd1 = 0;
        $cd2 = 0;
        $cd3 = 0;
        $cd4 = 0;

        $ca1 = 0;
        $ca2 = 0;
        $ca3 = 0;
        $ca4 = 0;
        $ca5 = 0;

        $co1 = 0;
        $co2 = 0;
        $co3 = 0;
        $co4 = 0;

        $ct1 = 0;
        $ct2 = 0;
        $ct3 = 0;
        $ct4 = 0;
        $ct5 = 0;
        $ct6 = 0;
        $ct7 = 0;

        $ct11 = 0;
        $ct22 = 0;
        $ct33 = 0;
        $ct44 = 0;
        $ct55 = 0;
        $ct66 = 0;
        $ct77 = 0;

        $cshi = 0;

        $cdhi1 = 0;
        $cdhi2 = 0;
        $cdhi3 = 0;
        $cdhi4 = 0;
        $cdhi5 = 0;
        $cdhi6 = 0;

        $cint1 = 0;
        $cint2 = 0;
        $cint3 = 0;
        $cint4 = 0;

        $che1 = 0;

        $cmem1 = 0;
        $cmem2 = 0;
        $cmem3 = 0;
        $cmem4 = 0;

        $chp1 = 0;
        $chp2 = 0;
        $chp3 = 0;
        $chp4 = 0;
        $chp5 = 0;

        $cmap1 = 0;

        $cesq1 = 0;
        $cesq2 = 0;

        $cres1 = 0;

        $cmat1 = 0;
        $cmat2 = 0;

        $clog1 = 0;
        $clog2 = 0;

        $crel1 = 0;
        $crel2 = 0;
        $crel3 = 0;
        $crel4 = 0;
        $crel5 = 0;

        // Variables de retroalimentación

        $ral1 = '';

        $raf1 = '';
        $raf2 = '';
        $raf3 = '';
        $raf4 = '';

        $rad1 = '';
        $rad2 = '';
        $rad3 = '';
        $rad4 = '';

        $raa1 = '';
        $raa2 = '';
        $raa3 = '';
        $raa4 = '';
        $raa5 = '';

        $rao1 = '';
        $rao2 = '';
        $rao3 = '';
        $rao4 = '';

        $rat1 = '';
        $rat2 = '';
        $rat3 = '';
        $rat4 = '';
        $rat5 = '';
        $rat6 = '';
        $rat7 = '';

        $rat11 = '';
        $rat22 = '';
        $rat33 = '';
        $rat44 = '';
        $rat55 = '';
        $rat66 = '';
        $rat77 = '';

        $rashi = '';

        $radhi1 = '';
        $radhi2= '';
        $radhi3= '';
        $radhi4= '';
        $radhi5= '';
        $radhi6= '';

        $raint1 = '';
        $raint2 = '';
        $raint3 = '';
        $raint4 = '';

        $rahe1 = '';

        $ramem1 = '';
        $ramem2 = '';
        $ramem3 = '';
        $ramem4 = '';

        $rahp1 = '';
        $rahp2 = '';
        $rahp3 = '';
        $rahp4 = '';
        $rahp5 = '';

        $ramap1 = '';

        $raesq1 = '';
        $raesq2 = '';

        $rares1 = '';

        $ramat1 = '';
        $ramat2 = '';

        $ralog1 = '';
        $ralog2 = '';

        $rarel1 = '';
        $rarel2 = '';
        $rarel3 = '';
        $rarel4 = '';
        $rarel5 = '';

        //avance


        $p_foda1 = 0;
        $p_foda = 0;

        $p_tiempo1 = 0;
        $p_tiempo = 0;

        $p = 0;

        $pf = 0;

        $p_a1 = 0;

        $p_a = 0;

        $alu =0 ;

        $avance = 0;



        //Entregado

        //Total de alumnos en este grupo
        $t_alu =  count(Alumno::where('grupo', $c)->get());

        //1) FODA
            //Fortalezas

        $cont = Alumno::where('grupo', $c)->get();

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_1 != NULL){
                    $f1++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_2 != NULL){
                $f2++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_3 != NULL){
                $f3++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_4 != NULL){
                $f4++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rf1++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rf2++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rf3++;
            }
        }

        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rf4++;
            }
        }


        //calificacones

        $suma_f1 = 0;
        $cont_f1 = 0;
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists()){
                $suma_f1 = $suma_f1 + Fortaleza::where('numero_control', $f->numero_control)->first()->cal_1;
                $cont_f1++;
            }
        }

        $cf1 = $suma_f1/$cont_f1++;

        $suma_f2 = 0;
        $cont_f2 = 0;
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists()){

                $suma_f2 = $suma_f2 + Fortaleza::where('numero_control', $f->numero_control)->first()->cal_2;
                $cont_f2++;
            }
        }

        $cf2 = $suma_f2/$cont_f2;



        $suma_f3 = 0;
        $cont_f3 = 0;
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists()){

                $suma_f3 = $suma_f3 + Fortaleza::where('numero_control', $f->numero_control)->first()->cal_3;
                $cont_f3++;
            }
        }

        $cf3 = $suma_f3/$cont_f3;


        $suma_f4 = 0;
        $cont_f4 = 0;
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists()){

                $suma_f4 = $suma_f4 + Fortaleza::where('numero_control', $f->numero_control)->first()->cal_4;
                $cont_f4++;
            }
        }

        $cf4 = $suma_f4/$cont_f4;


        //total entrega
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_1 != NULL  && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_2 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_3 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> fortalezas_4 != NULL){
                $ft++;
            }
        }

        //total revisión
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_f++;
            }
        }

        //Debilidades

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_1 != NULL){
                $d1++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_2 != NULL){
                $d2++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_3 != NULL){
                $d3++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_4 != NULL){
                $d4++;
            }
        }


        // revisión
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rd1++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rd2++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rd3++;
            }
        }

        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rd4++;
            }
        }

        //calificacones

        $suma_d1 = 0;
        $cont_d1 = 0;
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists()){

                $suma_d1 = $suma_d1 + Debilidad::where('numero_control', $f->numero_control)->first()->cal_1;
                $cont_d1++;
            }
        }

        $cd1 = $suma_d1/$cont_d1;


        $suma_d2 = 0;
        $cont_d2 = 0;
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists()){

                $suma_d2 = $suma_d2 + Debilidad::where('numero_control', $f->numero_control)->first()->cal_2;
                $cont_d2++;
            }
        }

        $cd2 = $suma_d2/$cont_d2;



        $suma_d3 = 0;
        $cont_d3 = 0;
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists()){

                $suma_d3 = $suma_d3 + Debilidad::where('numero_control', $f->numero_control)->first()->cal_3;
                $cont_d3++;
            }
        }

        $cd3 = $suma_d3/$cont_d3;


        $suma_d4 = 0;
        $cont_d4 = 0;
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists()){

                $suma_d4 = $suma_d4 + Debilidad::where('numero_control', $f->numero_control)->first()->cal_4;
                $cont_d4++;
            }
        }

        $cd4 = $suma_d4/$cont_d4;

        //total
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_1 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_2 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_3 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> debilidads_4 != NULL){
                $dt++;
            }
        }

        //total revisión
        foreach($cont as $f){

            if(Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_d++;
            }
        }




        //Amenazas

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_1 != NULL){
                $a1++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_2 != NULL){
                $a2++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_3 != NULL){
                $a3++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_4 != NULL){
                $a4++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_5 != NULL){
                $a5++;
            }
        }

        //total revisión

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $ra1++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $ra2++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $ra3++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $ra4++;
            }
        }

        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL){
                $ra5++;
            }
        }

        //calificacones

        $suma_a1 = 0;
        $cont_a1 = 0;
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists()){

                $suma_a1 = $suma_a1 + Amenaza::where('numero_control', $f->numero_control)->first()->cal_1;
                $cont_a1++;
            }
        }

        $ca1 = $suma_a1/$cont_a1;



        $suma_a2 = 0;
        $cont_a2 = 0;
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists()){

                $suma_a2 = $suma_a2 + Amenaza::where('numero_control', $f->numero_control)->first()->cal_2;
                $cont_a2++;
            }
        }

        $ca2 = $suma_a2/$cont_a2;


        $suma_a3 = 0;
        $cont_a3 = 0;
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists()){

                $suma_a3 = $suma_a3 + Amenaza::where('numero_control', $f->numero_control)->first()->cal_3;
                $cont_a3++;
            }
        }

        $ca3 = $suma_a3/$cont_a3;


        $suma_a4 = 0;
        $cont_a4 = 0;
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists()){

                $suma_a4 = $suma_a4 + Amenaza::where('numero_control', $f->numero_control)->first()->cal_4;
                $cont_a4++;
            }
        }

        $ca4 = $suma_a4/$cont_a4;


        $suma_a5 = 0;
        $cont_a5 = 0;
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists()){

                $suma_a5 = $suma_a5 + Amenaza::where('numero_control', $f->numero_control)->first()->cal_5;
                $cont_a5++;
            }
        }

        $ca5 = $suma_a5/$cont_a5;

        //total
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_1 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_2 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_3 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_4 != NULL  && Amenaza::where('numero_control', $f->numero_control)->first()-> amenazas_5 != NULL){
                $at++;
            }
        }

        //total revisión
        foreach($cont as $f){

            if(Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL){
                $pr_a++;
            }
        }

        //Oportunidades

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_1  != NULL){
                $o1++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_2 != NULL){
                $o2++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_3  != NULL){
                $o3++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_4  != NULL){
                $o4++;
            }
        }

        // revisión

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $ro1++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $ro2++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $ro3++;
            }
        }

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $ro4++;
            }
        }


        //total
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_1  != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_2  != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_3  != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->  oportunidads_4  != NULL){
                $ot++;
            }
        }

        //total revisión
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_o++;
            }
        }


        $suma_o1 = 0;
        $cont_o1 = 0;
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists()){

                $suma_o1 = $suma_o1 + Oportunidad::where('numero_control', $f->numero_control)->first()->cal_1;
                $cont_o1++;
            }
        }

        $co1 = $suma_o1/$cont_o1;


        $suma_o2 = 0;
        $cont_o2 = 0;
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists()){

                $suma_o2 = $suma_o2 + Oportunidad::where('numero_control', $f->numero_control)->first()->cal_2;
                $cont_o2++;
            }
        }

        $co2 = $suma_o2/$cont_o2;


        $suma_o3 = 0;
        $cont_o3 = 0;
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists()){

                $suma_o3 = $suma_o3 + Oportunidad::where('numero_control', $f->numero_control)->first()->cal_3;
                $cont_o3++;
            }
        }

        $co3 = $suma_o3/$cont_o3;


        $suma_o4 = 0;
        $cont_o4 = 0;
        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists()){

                $suma_o4 = $suma_o4 + Oportunidad::where('numero_control', $f->numero_control)->first()->cal_4;
                $cont_o4++;
            }
        }

        $co4 = $suma_o4/$cont_o4;


        //super total foda

        foreach($cont as $f){

            if(Oportunidad::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()->  fortalezas_1  != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()->  fortalezas_2  != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()->  fortalezas_3  != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()->  fortalezas_4  != NULL && Debilidad::where('numero_control', $f->numero_control)->first()->   debilidads_1   != NULL  && Debilidad::where('numero_control', $f->numero_control)->first()->   debilidads_2   != NULL && Debilidad::where('numero_control', $f->numero_control)->first()->   debilidads_3  != NULL && Debilidad::where('numero_control', $f->numero_control)->first()->   debilidads_4   != NULL && Amenaza::where('numero_control', $f->numero_control)->first()->   amenazas_1   != NULL && Amenaza::where('numero_control', $f->numero_control)->first()->   amenazas_2   != NULL && Amenaza::where('numero_control', $f->numero_control)->first()->   amenazas_3   != NULL && Amenaza::where('numero_control', $f->numero_control)->first()->   amenazas_4   != NULL && Amenaza::where('numero_control', $f->numero_control)->first()->   amenazas_5   != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->   oportunidads_1   != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->   oportunidads_2   != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->   oportunidads_3   != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()->   oportunidads_4   != NULL){
                $s_tot++;
            }
        }

        //total final revisión
        foreach($cont as $f){

            if(Fortaleza::where('numero_control', $f->numero_control)->exists() && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Fortaleza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Debilidad::where('numero_control', $f->numero_control)->exists() && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Debilidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Amenaza::where('numero_control', $f->numero_control)->exists() && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Amenaza::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL && Oportunidad::where('numero_control', $f->numero_control)->exists() && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Oportunidad::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_t_foda++;
            }
        }

        // total final calificacion
        $total_cal_foda1 = ((($cf1+$cf2+$cf3+$cf4)/4)+(($cd1+$cd2+$cd3+$cd4)/4)+(($ca1+$ca2+$ca3+$ca4+$ca5)/4)+(($co1+$co2+$co3+$co4)/4))/4;
        $total_cal_foda = number_format((float)$total_cal_foda1, 2, '.', '');

        //Tiempo

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_1  != NULL){
                $t1++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_1  != NULL){
                $t2++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_1 != NULL){
                $t3++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_1  != NULL){
                $t4++;
            }
        }


        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_1  != NULL){
                $t5++;
            }
        }


        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_1  != NULL){
                $t6++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_1  != NULL){
                $t7++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rt1++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rt2++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rt3++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rt4++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL){
                $rt5++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_6 != NULL){
                $rt6++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_7 != NULL){
                $rt7++;
            }
        }

        //calificaciones

        $suma_t1 = 0;
        $cont_t1 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t1 = $suma_t1 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_1;
                $cont_t1++;
            }
        }

        $ct1 = $suma_t1/$cont_t1;


        $suma_t2 = 0;
        $cont_t2 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t2 = $suma_t2 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_2;
                $cont_t2++;
            }
        }

        $ct2 = $suma_t2/$cont_t2;


        $suma_t3 = 0;
        $cont_t3 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t3 = $suma_t3 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_3;
                $cont_t3++;
            }
        }

        $ct3 = $suma_t3/$cont_t3;


        $suma_t4 = 0;
        $cont_t4 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t4 = $suma_t4 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_4;
                $cont_t4++;
            }
        }

        $ct4 = $suma_t4/$cont_t4;


        $suma_t5 = 0;
        $cont_t5 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t5 = $suma_t5 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_5;
                $cont_t5++;
            }
        }

        $ct5 = $suma_t5/$cont_t5;


        $suma_t6 = 0;
        $cont_t6 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t6 = $suma_t6 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_6;
                $cont_t6++;
            }
        }

        $ct6 = $suma_t6/$cont_t6;


        $suma_t7 = 0;
        $cont_t7 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t7 = $suma_t7 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_7;
                $cont_t7++;
            }
        }

        $ct7 = $suma_t7/$cont_t7;



        //total revisión

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_6 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_7 != NULL){
                $pr_t++;
            }
        }


        //total 1
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_1  != NULL){
                $t_tot++;
            }
        }

        //t2

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_2  != NULL){
                $t11++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_2  != NULL){
                $t22++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_2 != NULL){
                $t33++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_2  != NULL){
                $t44++;
            }
        }


        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_2  != NULL){
                $t55++;
            }
        }


        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_2  != NULL){
                $t66++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_2  != NULL){
                $t77++;
            }
        }

        // revisión

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_8 != NULL){
                $rt11++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_9 != NULL){
                $rt22++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_10 != NULL){
                $rt33++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_11 != NULL){
                $rt44++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_12 != NULL){
                $rt55++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_13 != NULL){
                $rt66++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_14 != NULL){
                $rt77++;
            }
        }

        //total 2
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_2  != NULL){
                $tt_tot++;
            }
        }

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_8 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_9 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_10 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_11 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_12 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_13 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_14 != NULL){
                $pr_tt++;
            }
        }

        //calificaciones

        $suma_t8 = 0;
        $cont_t8 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t8 = $suma_t8 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_8;
                $cont_t8++;
            }
        }

        $ct11 = $suma_t8/$cont_t8;

        $suma_t9 = 0;
        $cont_t9 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t9 = $suma_t9 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_9;
                $cont_t9++;
            }
        }

        $ct22 = $suma_t9/$cont_t9;

        $suma_t10 = 0;
        $cont_t10 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t10 = $suma_t10 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_10;
                $cont_t10++;
            }
        }

        $ct33 = $suma_t10/$cont_t10;



        $suma_t11 = 0;
        $cont_t11 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t11 = $suma_t11 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_11;
                $cont_t11++;
            }
        }

        $ct44 = $suma_t11/$cont_t11;


        $suma_t12 = 0;
        $cont_t12 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t12 = $suma_t12 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_12;
                $cont_t12++;
            }
        }

        $ct55 = $suma_t12/$cont_t12;


        $suma_t13 = 0;
        $cont_t13 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t13 = $suma_t13 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_13;
                $cont_t13++;
            }
        }

        $ct66 = $suma_t13/$cont_t13;

        $suma_t14 = 0;
        $cont_t14 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t14 = $suma_t14 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_14;
                $cont_t14++;
            }
        }

        $ct77 = $suma_t14/$cont_t14;

        $pro_cal_22 = ($ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/7;
        
        $pro_cal_2 = number_format((float)$pro_cal_22, 2, '.', '');

        $p_tiempo1 = ($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7+$ct11+$ct22+$ct33+$ct44+$ct55+$ct66+$ct77)/14;
        $p_tiempo = number_format((float)$p_tiempo1, 2, '.', '');

        //super total tiempo
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_1  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_1  != NULL  && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_lunes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_martes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_miercoles_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_jueves_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_viernes_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_sabado_2  != NULL && Tiempo::where('numero_control', $f->numero_control)->first()->  avance_domingo_2  != NULL){
                $s_tot2++;
            }
        }
        //total final revisión

        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists() && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_6 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_7 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_8 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_9 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_10 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_11 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_12 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_13 != NULL && Tiempo::where('numero_control', $f->numero_control)->first()-> retro_14 != NULL){
                $pr_t_t++;
            }
        }


        //Ser humano integral

        foreach($cont as $f){

            if(Humanointegral::where('numero_control', $f->numero_control)->exists() && Humanointegral::where('numero_control', $f->numero_control)->first()->pres_per  != NULL &&  Humanointegral::where('numero_control', $f->numero_control)->first()->salud  != NULL &&  Humanointegral::where('numero_control', $f->numero_control)->first()->simpatia  != NULL){
                $shi++;
            }
        }

        //total revisión

        foreach($cont as $f){

            if(Humanointegral::where('numero_control', $f->numero_control)->exists() && Humanointegral::where('numero_control', $f->numero_control)->first()-> retro != NULL){
                $rshi++;
            }
        }

        //calificacion ----

        $cshi = $suma_t13/$cont_t13;

        $suma_t14 = 0;
        $cont_t14 = 0;
        foreach($cont as $f){

            if(Tiempo::where('numero_control', $f->numero_control)->exists()){

                $suma_t14 = $suma_t14 + Tiempo::where('numero_control', $f->numero_control)->first()->cal_14;
                $cont_t14++;
            }
        }


        //Desarrollo humano integral

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $dhi1++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $dhi2++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL){
                $dhi3++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $dhi4++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_5  != NULL){
                $dhi5++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_6  != NULL){
                $dhi6++;
            }
        }


        //total revisión

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rdhi1++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rdhi2++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rdhi3++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rdhi4++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL){
                $rdhi5++;
            }
        }

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_6 != NULL){
                $rdhi6++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_5 != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()-> retro_6 != NULL){
                $pr_dhi++;
            }
        }


        //total

        foreach($cont as $f){

            if(Desarrollohumano::where('numero_control', $f->numero_control)->exists() && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_5  != NULL && Desarrollohumano::where('numero_control', $f->numero_control)->first()->  avance_6  != NULL){
                $dhit++;
            }
        }

        //Inteligencia

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $int1++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $int2++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL){
                $int3++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $int4++;
            }
        }

        //revision

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rint1++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rint2++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rint3++;
            }
        }

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rint4++;
            }
        }


        //total

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL && Inteligencia::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $intt++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Inteligencia::where('numero_control', $f->numero_control)->exists() && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL  && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_3!= NULL  && Inteligencia::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_int++;
            }
        }


        //Hab estudio

        foreach($cont as $f){

            if(Habilidad::where('numero_control', $f->numero_control)->exists() && Habilidad::where('numero_control', $f->numero_control)->first()->  h1  != NULL && Habilidad::where('numero_control', $f->numero_control)->first()->  h2  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h3  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h4  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h5  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h6  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h7  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h8  != NULL  && Habilidad::where('numero_control', $f->numero_control)->first()->  h9  != NULL){
                $he1++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Habilidad::where('numero_control', $f->numero_control)->exists() && Habilidad::where('numero_control', $f->numero_control)->first()-> retro != NULL){
                $rhe1++;
            }
        }


        //Memoria

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $mem1++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $mem2++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL){
                $mem3++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $mem4++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rmem1++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rmem2++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rmem3++;
            }
        }

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rmem4++;
            }
        }

        //total
        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Memoria::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL && Memoria::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL && Memoria::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $memt++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Memoria::where('numero_control', $f->numero_control)->exists() && Memoria::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Memoria::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL  && Memoria::where('numero_control', $f->numero_control)->first()-> retro_3!= NULL  && Memoria::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_mem++;
            }
        }

        //Hab pensamiento

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $hp1++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $hp2++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL){
                $hp3++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $hp4++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rhp1++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rhp2++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_3 != NULL){
                $rhp3++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $rhp4++;
            }
        }

        //total

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL  && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL && Pensamiento::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $hpt++;
            }
        }

        foreach($cont as $f){

            if(Pensamiento::where('numero_control', $f->numero_control)->exists() && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL  && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_3!= NULL  && Pensamiento::where('numero_control', $f->numero_control)->first()-> retro_4 != NULL){
                $pr_hp++;
            }
        }

        //Mapa

        foreach($cont as $f){

            if(Mapa::where('numero_control', $f->numero_control)->exists() && Mapa::where('numero_control', $f->numero_control)->first()->  ruta  != NULL){
                $map1++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Mapa::where('numero_control', $f->numero_control)->exists() && Mapa::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rmap1++;
            }
        }

        //Esquema

        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $esq1++;
            }
        }

        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $esq2++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $resq1++;
            }
        }

        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $resq2++;
            }
        }

        //total
        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Esquema::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $esqt++;
            }
        }

        // revisión promedio

        foreach($cont as $f){

            if(Esquema::where('numero_control', $f->numero_control)->exists() && Esquema::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Esquema::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $pr_esq++;
            }
        }


    //Resumen

        foreach($cont as $f){

            if(Ensayo::where('numero_control', $f->numero_control)->exists() && Ensayo::where('numero_control', $f->numero_control)->first()->  ens  != NULL){
                $res1++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Ensayo::where('numero_control', $f->numero_control)->exists() && Ensayo::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rres1++;
            }
        }

        //Mat

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $mat1++;
            }
        }

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()->  avance_2 != NULL){
                $mat2++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rmat1++;
            }
        }

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rmat2++;
            }
        }

        //total

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL  && Mat::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $matt++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Mat::where('numero_control', $f->numero_control)->exists() && Mat::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Mat::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $pr_mat++;
            }
        }


        //Info logicas

        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $log1++;
            }
        }

        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $log2++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL){
                $rlog1++;
            }
        }

        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $rlog2++;
            }
        }



        //total
        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Inferencia::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $logt++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Inferencia::where('numero_control', $f->numero_control)->exists() && Inferencia::where('numero_control', $f->numero_control)->first()-> retro_1 != NULL  && Inferencia::where('numero_control', $f->numero_control)->first()-> retro_2 != NULL){
                $pr_log++;
            }
        }


        //Rel sim

        //avance

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL){
                $rel1++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL){
                $rel2++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL){
                $rel3++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL){
                $rel4++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_5  != NULL){
                $rel5++;
            }
        }

        //total

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()->  avance_1  != NULL && Relacion::where('numero_control', $f->numero_control)->first()->  avance_2  != NULL && Relacion::where('numero_control', $f->numero_control)->first()->  avance_3  != NULL && Relacion::where('numero_control', $f->numero_control)->first()->  avance_4  != NULL && Relacion::where('numero_control', $f->numero_control)->first()->  avance_5  != NULL){
                $relt++;
            }
        }

        //revisión

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_1  != NULL){
                $rrel1++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_2  != NULL){
                $rrel2++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_3  != NULL){
                $rrel3++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_4  != NULL){
                $rrel4++;
            }
        }

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_5  != NULL){
                $rrel5++;
            }
        }

        //revisión promedio

        foreach($cont as $f){

            if(Relacion::where('numero_control', $f->numero_control)->exists() && Relacion::where('numero_control', $f->numero_control)->first()-> retro_1  != NULL && Relacion::where('numero_control', $f->numero_control)->first()-> retro_2  != NULL && Relacion::where('numero_control', $f->numero_control)->first()-> retro_3  != NULL && Relacion::where('numero_control', $f->numero_control)->first()-> retro_4  != NULL && Relacion::where('numero_control', $f->numero_control)->first()-> retro_5  != NULL){
                $pr_rel++;
            }
        }


        /*foreach($lc as $l){
            $c1 = $c1 + $l->cal_1;
        }*/

        return view('tutor.activities.avance_grupo', compact('pro_cal_total','pro_cal_2','total_cal_foda','pr_rel','pr_log','pr_mat','pr_esq','pr_hp','pr_mem','pr_int','pr_dhi','pr_t_t','pr_t_foda','pr_t','pr_tt','pr_f','pr_d','pr_a','pr_o','rf1','rf2','rf3','rf4','rd1','rd2','rd3','rd4','ra1','ra2','ra3','ra4','ra5','s_tot','s_tot2','ft','dt','at','ot','t_tot','tt_tot','dhit','intt','memt','hpt','esqt','matt','logt','relt','f1','f2','f3','f4', 'd1', 'd2', 'd3', 'd4', 'a1', 'a2', 'a3', 'a4', 'a5','o1','o2','o3','o4','t1','t2','t3','t4','t5','t6','t7','t11','t22','t33','t44','t55','t66','t77','shi','dhi1','dhi2','dhi3','dhi4','dhi5','dhi6','int1','int2','int3','int4','he1','mem1','mem2','mem3','mem4','hp1','hp2','hp3','hp4','hp5','map1','esq1','esq2','res1','mat1','mat2','log1','log2','rel1','rel2','rel3','rel4','rel5','rf1','rf2','rf3','rf4','rd1', 'rd2', 'rd3', 'rd4', 'ra1', 'ra2', 'ra3', 'ra4', 'ra5','ro1','ro2','ro3','ro4','rt1','rt2','rt3','rt4','rt5','rt6','rt7','rt11','rt22','rt33','rt44','rt55','rt66','rt77','rshi','rdhi1','rdhi2','rdhi3','rdhi4','rdhi5','rdhi6','rint1','rint2','rint3','rint4','rhe1','rmem1','rmem2','rmem3','rmem4','rhp1','rhp2','rhp3','rhp4','rhp5','rmap1','resq1','resq2','rres1','rmat1','rmat2','rlog1','rlog2','rrel1','rrel2','rrel3','rrel4','rrel5','cf1','cf2','cf3','cf4','cd1','cd2','cd3','cd4','ca1','ca2','ca3','ca4','ca5','co1','co2','co3','co4','ct1','ct2','ct3','ct4','ct5','ct6','ct7','ct11','ct22','ct33','ct44','ct55','ct66','ct77','cshi','cdhi1','cdhi2','cdhi3','cdhi4','cdhi5','cdhi6','cint1','cint2','cint3','cint4','che1','cmem1','cmem2','cmem3','cmem4','chp1','chp2','chp3','chp4','cmap1','cesq1','cesq2','cres1','cmat1','cmat2','clog1','clog2','crel1','crel2','crel3','crel4','crel5','l1','rl1','cl1','ral1','raf1','raf2','raf3','raf4','rad1','rad2','rad3','rad4','raa1','raa2','raa3','raa4','raa5','rao1','rao2','rao3','rao4','rat1','rat2','rat3','rat4','rat5','rat6','rat7','rat11','rat22','rat33','rat44','rat55','rat66','rat77','rashi','radhi1','radhi2','radhi3','radhi4','radhi5','radhi6','raint1','raint2','raint3','raint4','rahe1','ramem1','ramem2','ramem3','ramem4','rahp1','rahp2','rahp3','rahp4','ramap1','raesq1','raesq2','rares1','ramat1','ramat2','ralog1','ralog2','rarel1','rarel2','rarel3','rarel4','rarel5','pf','p_foda','p_tiempo','p_a','alu','c','t_alu'));

    }



        public function index(){

}

//public function destroy(Request $request, $id){
//
//        if($request->ajax()){
//
//            $activity = Activity::find($id);
//            $activity->delete();
//            $act_total = Activity::all()->count();
//
//            return response()->json([
//                'total'=>$act_total,
//                'mensaje'=>$activity->name.' eliminada'
//            ]);
//        }
//
//}


}
