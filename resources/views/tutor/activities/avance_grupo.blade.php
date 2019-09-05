@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Panel de Actividades</h2>
    <div class="panel panel-default table-responsive">

        <div class="panel-body">
            <strong>Grupo:</strong> {{$c}}
            <br><br>
            <strong>Total de alumnos: </strong>{{$t_alu}}<br>
            {{--<strong>Avance general: </strong>{{$p_a}}%--}}
<br><br>
            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_1_1')}}">
                {{csrf_field()}}

                    <div class="table-responsive">
                            <table class="table table-striped" id="dynamic_field">
                                <thead>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Entregado</th>
                                    <th>Revisado</th>
                                    <th>Calificación</th>
                                    <th>Retro alimentaciòn</th>
                                </thead>

                                <tr>
                                    <td>1</td>
                                    <td><strong><a href="{{url('/linea_tiempo')}}">Linea del tiempo</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">1.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/linea_tiempo')}}">Ejercicio 1</a></td>
                                    <td>{{$l1 == 1 ?  'Si' : 'No'}}</td>
                                    <td>{{$rl1 == 1 ?  'Si' : 'No'}}</td>
                                    <td>{{$cl1}}</td>
                                    <td>{{$ral1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$cl1}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td><strong><a href="{{url('/foda_1_1')}}">Cuestionarios FODA</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/foda_1_1')}}">Fortalezas</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_1_1')}}">Fortalezas parte 1</a></td>
                                    <td>{{$f1}}</td>
                                    <td>{{$rf1}}</td>
                                    <td>{{$cf1}}</td>
                                    <td>{{$raf1 == '' ?  '---' : $raf1}}</td>

                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.2</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_1_2')}}">Fortalezas parte 2</a></td>
                                    <td>{{$f2}}</td>
                                    <td>{{$rf2}}</td>
                                    <td>{{$cf2}}</td>
                                    <td>{{$raf2 == '' ?  '---' : $raf2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.3</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_1_3')}}">Fortalezas parte 3</a></td>
                                    <td>{{$f3}}</td>
                                    <td>{{$rf3}}</td>
                                    <td>{{$cf3}}</td>
                                    <td>{{$raf3 == '' ?  '---' : $raf3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.4</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_1_4')}}">Fortalezas parte 4</a></td>
                                    <td>{{$f4}}</td>
                                    <td>{{$rf4}}</td>
                                    <td>{{$cf4}}</td>
                                    <td>{{$raf4 == '' ?  '---' : $raf4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$ft}}</td>
                                    <td>{{$pr_f}}</td>
                                    <td>{{($cf1+$cf2+$cf3+$cf4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/foda_2_1')}}">Debilidades</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.5</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_2_1')}}">Debilidades parte 1</a></td>
                                    <td>{{$d1}}</td>
                                    <td>{{$rd1}}</td>
                                    <td>{{$cd1}}</td>
                                    <td>{{$rad1 == '' ?  '---' : $rad1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.6</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_2_2')}}">Debilidades parte 2</a></td>
                                    <td>{{$d2}}</td>
                                    <td>{{$rd2}}</td>
                                    <td>{{$cd2}}</td>
                                    <td>{{$rad2 == '' ?  '---' : $rad2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.7</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_2_3')}}">Debilidades parte 3</a></td>
                                    <td>{{$d3}}</td>
                                    <td>{{$rd3}}</td>
                                    <td>{{$cd3}}</td>
                                    <td>{{$rad3 == '' ?  '---' : $rad3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.9</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_2_4')}}">Debilidades parte 4</a></td>
                                    <td>{{$d4}}</td>
                                    <td>{{$rd4}}</td>
                                    <td>{{$cd4}}</td>
                                    <td>{{$rad4 == '' ?  '---' : $rad4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$dt}}</td>
                                    <td>{{$pr_d}}</td>
                                    <td>{{($cd1+$cd2+$cd3+$cd4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/foda_3_1')}}">Amenazas</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.10</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_3_1')}}">Amenazas parte 1</a></td>
                                    <td>{{$a1}}</td>
                                    <td>{{$ra1}}</td>
                                    <td>{{$ca1}}</td>
                                    <td>{{$raa1 == '' ?  '---' : $raa1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.11</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_3_2')}}">Amenazas parte 2</a></td>
                                    <td>{{$a2}}</td>
                                    <td>{{$ra2}}</td>
                                    <td>{{$ca2}}</td>
                                    <td>{{$raa2 == '' ?  '---' : $raa2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.12</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_3_3')}}">Amenazas parte 3</a></td>
                                    <td>{{$a3}}</td>
                                    <td>{{$ra3}}</td>
                                    <td>{{$ca3}}</td>
                                    <td>{{$raa3 == '' ?  '---' : $raa3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.13</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_3_4')}}">Amenazas parte 4</a></td>
                                    <td>{{$a4}}</td>
                                    <td>{{$ra4}}</td>
                                    <td>{{$ca4}}</td>
                                    <td>{{$raa4 == '' ?  '---' : $raa4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.14</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_3_5')}}">Amenazas parte 5</a></td>
                                    <td>{{$a5}}</td>
                                    <td>{{$ra5}}</td>
                                    <td>{{$ca5}}</td>
                                    <td>{{$raa5 == '' ?  '---' : $raa5}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$at}}</td>
                                    <td>{{$pr_a}}</td>
                                    <td>{{($ca1+$ca2+$ca3+$ca4+$ca5)/5}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/foda_4_1')}}">Oportunidades</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.15</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_4_1')}}">Oportunidades parte 1</a></td>
                                    <td>{{$o1}}</td>
                                    <td>{{$ro1}}</td>
                                    <td>{{$co1}}</td>
                                    <td>{{$rao1 == '' ?  '---' : $rao1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.16</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_4_2')}}">Oportunidades parte 2</a></td>
                                    <td>{{$o2}}</td>
                                    <td>{{$ro2}}</td>
                                    <td>{{$co2}}</td>
                                    <td>{{$rao2 == '' ?  '---' : $rao2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.17</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_4_3')}}">Oportunidades parte 3</a></td>
                                    <td>{{$o3}}</td>
                                    <td>{{$ro3}}</td>
                                    <td>{{$co3}}</td>
                                    <td>{{$rao3 == '' ?  '---' : $rao3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">2.18</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/foda_4_4')}}">Oportunidades parte 4</a></td>
                                    <td>{{$o4}}</td>
                                    <td>{{$ro4}}</td>
                                    <td>{{$co4}}</td>
                                    <td>{{$rao4 == '' ?  '---' : $rao4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$ot}}</td>
                                    <td>{{$pr_o}}</td>
                                    <td>{{($co1+$co2+$co3+$co4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$s_tot}}</td>
                                    <td>{{$pr_t_foda}}</td>
                                    <td><strong>{{$total_cal_foda}}</strong></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td><strong><a href="{{url('/tiempo_l_1')}}">Administración del tiempo</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/tiempo_ej_1')}}">Parte 1</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2')}}">Dia Lunes</a></td>
                                    <td>{{$t1}}</td>
                                    <td>{{$rt1}}</td>
                                    <td>{{$ct1}}</td>
                                    <td>{{$rat1 == '' ?  '---' : $rat1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.2</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_3')}}">Dia Martes</a></td>
                                    <td>{{$t2}}</td>
                                    <td>{{$rt2}}</td>
                                    <td>{{$ct2}}</td>
                                    <td>{{$rat2 == '' ?  '---' : $rat2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.3</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_4')}}">Dia Miercoles</a></td>
                                    <td>{{$t3}}</td>
                                    <td>{{$rt3}}</td>
                                    <td>{{$ct3}}</td>
                                    <td>{{$rat3 == '' ?  '---' : $rat3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.4</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_5')}}">Dia Jueves</a></td>
                                    <td>{{$t4}}</td>
                                    <td>{{$rt4}}</td>
                                    <td>{{$ct4}}</td>
                                    <td>{{$rat4 == '' ?  '---' : $rat4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.5</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_6')}}">Dia Viernes</a></td>
                                    <td>{{$t5}}</td>
                                    <td>{{$rt5}}</td>
                                    <td>{{$ct5}}</td>
                                    <td>{{$rat5 == '' ?  '---' : $rat5}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.6</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_7')}}">Dia Sabado</a></td>
                                    <td>{{$t6}}</td>
                                    <td>{{$rt6}}</td>
                                    <td>{{$ct6}}</td>
                                    <td>{{$rat6 == '' ?  '---' : $rat6}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.7</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_8')}}">Dia Domingo</a></td>
                                    <td>{{$t7}}</td>
                                    <td>{{$rt7}}</td>
                                    <td>{{$ct7}}</td>
                                    <td>{{$rat7 == '' ?  '---' : $rat7}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$t_tot}}</td>
                                    <td>{{$pr_t}}</td>
                                    <td>{{($ct1+$ct2+$ct3+$ct4+$ct5+$ct6+$ct7)/7}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong><a href="{{url('/tiempo_ej_2_1')}}">Parte 2</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.8</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_2')}}">Dia Lunes</a></td>
                                    <td>{{$t11}}</td>
                                    <td>{{$rt11}}</td>
                                    <td>{{$ct11}}</td>
                                    <td>{{$rat11 == '' ?  '---' : $rat11}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.9</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_3')}}">Dia Martes</a></td>
                                    <td>{{$t22}}</td>
                                    <td>{{$rt22}}</td>
                                    <td>{{$ct22}}</td>
                                    <td>{{$rat22 == '' ?  '---' : $rat22}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.10</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_4')}}">Dia Miercoles</a></td>
                                    <td>{{$t33}}</td>
                                    <td>{{$rt33}}</td>
                                    <td>{{$ct33}}</td>
                                    <td>{{$rat33 == '' ?  '---' : $rat33}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.11</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_5')}}">Dia Jueves</a></td>
                                    <td>{{$t44}}</td>
                                    <td>{{$rt44}}</td>
                                    <td>{{$ct44}}</td>
                                    <td>{{$rat44 == '' ?  '---' : $rat44}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.12</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_6')}}">Dia Viernes</a></td>
                                    <td>{{$t55}}</td>
                                    <td>{{$rt55}}</td>
                                    <td>{{$ct55}}</td>
                                    <td>{{$rat55 == '' ?  '---' : $rat55}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.13</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_7')}}">Dia Sabado</a></td>
                                    <td>{{$t66}}</td>
                                    <td>{{$rt66}}</td>
                                    <td>{{$ct66}}</td>
                                    <td>{{$rat66 == '' ?  '---' : $rat66}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">3.14</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/tiempo_ej_2_8')}}">Dia Domingo</a></td>
                                    <td>{{$t77}}</td>
                                    <td>{{$rt77}}</td>
                                    <td>{{$ct77}}</td>
                                    <td>{{$rat77 == '' ?  '---' : $rat77}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio</strong></td>
                                    <td>{{$tt_tot}}</td>
                                    <td>{{$pr_t}}</td>
                                    <td>{{$pro_cal_2}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$s_tot2}}</td>
                                    <td>{{$pr_t_t}}</td>
                                    <td><strong>{{$p_tiempo}}</strong></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td><strong><a href="{{url('/hum_int_l_1')}}">El ser humano integral</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">4.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/hum_int_ej_1')}}">Ejercicio 1</a></td>
                                    <td>{{$shi}}</td>
                                    <td>{{$rshi}}</td>
                                    <td>{{$cshi}}</td>
                                    <td>{{$rashi == '' ?  '---' : $rashi}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$shi}}</td>
                                    <td>{{$rshi}}</td>
                                    <td>{{$cshi}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td><strong><a href="{{url('/des_hum_int_l_1')}}">Desarrollo humano integral</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_1')}}">Ejercicio 1</a></td>
                                    <td>{{$dhi1}}</td>
                                    <td>{{$rdhi1}}</td>
                                    <td>{{$cdhi1}}</td>
                                    <td>{{$radhi1 == '' ?  '---' : $radhi1}}</td>

                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.2</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_2')}}">Ejercicio 2</a></td>
                                    <td>{{$dhi2}}</td>
                                    <td>{{$rdhi2}}</td>
                                    <td>{{$cdhi2}}</td>
                                    <td>{{$radhi2 == '' ?  '---' : $radhi2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.3</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_3')}}">Ejercicio 3</a></td>
                                    <td>{{$dhi3}}</td>
                                    <td>{{$rdhi3}}</td>
                                    <td>{{$cdhi3}}</td>
                                    <td>{{$radhi3 == '' ?  '---' : $radhi3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.4</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_4')}}">Ejercicio 4</a></td>
                                    <td>{{$dhi4}}</td>
                                    <td>{{$rdhi4}}</td>
                                    <td>{{$cdhi4}}</td>
                                    <td>{{$radhi4 == '' ?  '---' : $radhi4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.5</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_5')}}">Ejercicio 5</a></td>
                                    <td>{{$dhi5}}</td>
                                    <td>{{$rdhi5}}</td>
                                    <td>{{$cdhi5}}</td>
                                    <td>{{$radhi5 == '' ?  '---' : $radhi5}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">5.6</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/des_hum_int_ej_6')}}">Ejercicio 6</a></td>
                                    <td>{{$dhi6}}</td>
                                    <td>{{$rdhi6}}</td>
                                    <td>{{$cdhi6}}</td>
                                    <td>{{$radhi6 == '' ?  '---' : $radhi6}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$dhit}}</td>
                                    <td>{{$pr_dhi}}</td>
                                    <td>{{($cdhi1+$cdhi2+$cdhi3+$cdhi4+$cdhi5+$cdhi6)/6}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td><strong><a href="{{url('/int_mult_l_1')}}">Inteligencias multiples</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">6.1</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/int_mult_ej_1')}}">Ejercicio 1</a></td>
                                    <td>{{$int1}}</td>
                                    <td>{{$rint1}}</td>
                                    <td>{{$cint1}}</td>
                                    <td>{{$raint1 == '' ?  '---' : $raint1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">6.2</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/int_mult_ej_2')}}">Ejercicio 2</a></td>
                                    <td>{{$int2}}</td>
                                    <td>{{$rint2}}</td>
                                    <td>{{$cint2}}</td>
                                    <td>{{$raint2 == '' ?  '---' : $raint2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">6.3</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/int_mult_ej_3')}}">Ejercicio 3</a></td>
                                    <td>{{$int3}}</td>
                                    <td>{{$rint3}}</td>
                                    <td>{{$cint3}}</td>
                                    <td>{{$raint3 == '' ?  '---' : $raint3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;">6.4</td>
                                    <td style="text-indent: 20px;"><a href="{{url('/int_mult_ej_4')}}">Ejercicio 4</a></td>
                                    <td>{{$int4}}</td>
                                    <td>{{$rint4}}</td>
                                    <td>{{$cint4}}</td>
                                    <td>{{$raint4 == '' ?  '---' : $raint4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$intt}}</td>
                                    <td>{{$pr_int}}</td>
                                    <td>{{($cint1+$cint2+$cint3+$cint4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td><strong><a href="{{url('/hab_est_l_1')}}">Habilidades de estudio</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>7.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/hab_est_1')}}">Ejercicio 1</a></td>
                                    <td>{{$he1}}</td>
                                    <td>{{$rhe1}}</td>
                                    <td>{{$che1}}</td>
                                    <td>{{$rahe1 == '' ?  '---' : $rahe1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$he1}}</td>
                                    <td>{{$rhe1}}</td>
                                    <td>{{$che1}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td><strong><a href="{{url('/mem_l_1')}}">Memoria</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>8.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mem_1')}}">Ejercicio 1</a></td>
                                    <td>{{$mem1}}</td>
                                    <td>{{$rmem1}}</td>
                                    <td>{{$cmem1}}</td>
                                    <td>{{$ramem1 == '' ?  '---' : $ramem1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>8.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mem_2')}}">Ejercicio 2</a></td>
                                    <td>{{$mem2}}</td>
                                    <td>{{$rmem2}}</td>
                                    <td>{{$cmem2}}</td>
                                    <td>{{$ramem2 == '' ?  '---' : $ramem2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>8.3</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mem_3')}}">Ejercicio 3</a></td>
                                    <td>{{$mem3}}</td>
                                    <td>{{$rmem3}}</td>
                                    <td>{{$cmem3}}</td>
                                    <td>{{$ramem3 == '' ?  '---' : $ramem3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>8.4</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mem_4')}}">Ejercicio 4</a></td>
                                    <td>{{$mem4}}</td>
                                    <td>{{$rmem4}}</td>
                                    <td>{{$cmem4}}</td>
                                    <td>{{$ramem4 == '' ?  '---' : $ramem4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$memt}}</td>
                                    <td>{{$pr_mem}}</td>
                                    <td>{{($cmem1+$cmem2+$cmem3+$cmem4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td><strong><a href="{{url('/pens_l_1')}}">Habilidades del pensamiento</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>9.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/pens_1')}}">Ejercicio 1</a></td>
                                    <td>{{$hp1}}</td>
                                    <td>{{$rhp1}}</td>
                                    <td>{{$chp1}}</td>
                                    <td>{{$rahp1 == '' ?  '---' : $rahp1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>9.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/pens_2')}}">Ejercicio 2</a></td>
                                    <td>{{$hp2}}</td>
                                    <td>{{$rhp2}}</td>
                                    <td>{{$chp2}}</td>
                                    <td>{{$rahp2 == '' ?  '---' : $rahp2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>9.3</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/pens_3')}}">Ejercicio 3</a></td>
                                    <td>{{$hp3}}</td>
                                    <td>{{$rhp3}}</td>
                                    <td>{{$chp3}}</td>
                                    <td>{{$rahp3 == '' ?  '---' : $rahp3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>9.4</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/pens_4')}}">Ejercicio 4</a></td>
                                    <td>{{$hp4}}</td>
                                    <td>{{$rhp4}}</td>
                                    <td>{{$chp4}}</td>
                                    <td>{{$rahp4 == '' ?  '---' : $rahp4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$hpt}}</td>
                                    <td>{{$pr_hp}}</td>
                                    <td>{{($chp1+$chp2+$chp3+$chp4)/4}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td><strong><a href="{{url('/mapas_l_1')}}">Mapa mental y conceptual</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>10.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mapas_1')}}">Ejercicio 1</a></td>
                                    <td>{{$map1}}</td>
                                    <td>{{$rmap1}}</td>
                                    <td>{{$cmap1}}</td>
                                    <td>{{$ramap1 == '' ?  '---' : $ramap1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$map1}}</td>
                                    <td>{{$rmap1}}</td>
                                    <td>{{$cmap1}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>11</td>
                                    <td><strong><a href="{{url('/esq_l_1')}}">Esquema y cuadro comparativo</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>11.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/esq_1')}}">Ejercicio 1</a></td>
                                    <td>{{$esq1}}</td>
                                    <td>{{$resq1}}</td>
                                    <td>{{$cesq1}}</td>
                                    <td>{{$raesq1 == '' ?  '---' : $raesq1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>11.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/esq_2')}}">Ejercicio 2</a></td>
                                    <td>{{$esq2}}</td>
                                    <td>{{$resq2}}</td>
                                    <td>{{$cesq2}}</td>
                                    <td>{{$raesq1 == '' ?  '---' : $raesq1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$esqt}}</td>
                                    <td>{{$pr_esq}}</td>
                                    <td>{{($cesq1+$cesq2)/2}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>12</td>
                                    <td><strong><a href="{{url('/ens_l_1')}}">Resumen y ensayo</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>12.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/ens_1')}}">Ejercicio 1</a></td>
                                    <td>{{$res1}}</td>
                                    <td>{{$rres1}}</td>
                                    <td>{{$cres1}}</td>
                                    <td>{{$rares1 == '' ?  '---' : $rares1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$res1}}</td>
                                    <td>{{$rres1}}</td>
                                    <td>{{$cres1}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>13</td>
                                    <td><strong><a href="{{url('/mat_l_1')}}">Aprendizaje de las matemáticas</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>13.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mat_1')}}">Ejercicio 1</a></td>
                                    <td>{{$mat1}}</td>
                                    <td>{{$rmat1}}</td>
                                    <td>{{$cmat1}}</td>
                                    <td>{{$ramat1 == '' ?  '---' : $ramat1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>13.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/mat_2')}}">Ejercicio 2</a></td>
                                    <td>{{$mat2}}</td>
                                    <td>{{$rmat2}}</td>
                                    <td>{{$cmat2}}</td>
                                    <td>{{$ramat2 == '' ?  '---' : $ramat2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$matt}}</td>
                                    <td>{{$pr_mat}}</td>
                                    <td>{{($cmat1+$cmat2)/2}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>14</td>
                                    <td><strong><a href="{{url('/inf_1')}}">Inferencias lógicas</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>14.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/inf_1')}}">Ejercicio 1</a></td>
                                    <td>{{$log1}}</td>
                                    <td>{{$rlog1}}</td>
                                    <td>{{$clog1}}</td>
                                    <td>{{$ralog1 == '' ?  '---' : $ralog1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>14.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/inf_2')}}">Ejercicio 2</a></td>
                                    <td>{{$log2}}</td>
                                    <td>{{$rlog2}}</td>
                                    <td>{{$clog2}}</td>
                                    <td>{{$ralog2 == '' ?  '---' : $ralog2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$logt}}</td>
                                    <td>{{$pr_log}}</td>
                                    <td>{{($clog1+$clog2)/2}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>15</td>
                                    <td><strong><a href="{{url('/rel_sim_1')}}">Relación y simbolización</a></strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>15.1</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/rel_sim_1')}}">Ejercicio 1</a></td>
                                    <td>{{$rel1}}</td>
                                    <td>{{$rrel1}}</td>
                                    <td>{{$crel1}}</td>
                                    <td>{{$rarel1 == '' ?  '---' : $rarel1}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>15.2</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/rel_sim_2')}}">Ejercicio 2</a></td>
                                    <td>{{$rel2}}</td>
                                    <td>{{$rrel2}}</td>
                                    <td>{{$crel2}}</td>
                                    <td>{{$rarel2 == '' ?  '---' : $rarel2}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>15.3</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/rel_sim_3')}}">Ejercicio 3</a></td>
                                    <td>{{$rel3}}</td>
                                    <td>{{$rrel3}}</td>
                                    <td>{{$crel3}}</td>
                                    <td>{{$rarel3 == '' ?  '---' : $rarel3}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>15.4</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/rel_sim_4')}}">Ejercicio 4</a></td>
                                    <td>{{$rel4}}</td>
                                    <td>{{$rrel4}}</td>
                                    <td>{{$crel4}}</td>
                                    <td>{{$rarel4 == '' ?  '---' : $rarel4}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"><strong>15.5</strong></td>
                                    <td style="text-indent: 20px;"><a href="{{url('/rel_sim_5')}}">Ejercicio 5</a></td>
                                    <td>{{$rel5}}</td>
                                    <td>{{$rrel5}}</td>
                                    <td>{{$crel5}}</td>
                                    <td>{{$rarel5 == '' ?  '---' : $rarel5}}</td>
                                </tr>

                                <tr>
                                    <td style="text-indent: 20px;"></td>
                                    <td style="text-indent: 20px;"><strong>Promedio total</strong></td>
                                    <td>{{$relt}}</td>
                                    <td>{{$pr_rel}}</td>
                                    <td>{{($crel1+$crel2+$crel3+$crel4+$crel5)/5}}</td>
                                    <td></td>
                                </tr>

                            </table>
                    </div>
                </form>

            </div>

        </div>
    </div>


@stop
