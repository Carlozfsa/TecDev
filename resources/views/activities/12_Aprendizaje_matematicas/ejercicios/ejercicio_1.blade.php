@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL APRENDIZAJE DE LAS MATEMÁTICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;"> Reactivos Razonamiento Matemático</p></strong><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'MatsController@store_mat_1']) !!}

                <strong>1.- El área de la puerta de un edificio mide y su altura es de 2.40 m ¿Cuál
                    es el ancho de la puerta?</strong><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p1', 1) !!}&nbsp a) 1.80m</td>
                        <td>{!! Form::radio('p1', 2) !!}&nbsp b) 1.85m</td>
                        <td>{!! Form::radio('p1', 3) !!}&nbsp c) 1.90m</td>
                        <td>{!! Form::radio('p1', 4) !!}&nbsp d) 1.92m</td>
                        <td>{!! Form::radio('p1', 5) !!}&nbsp e) 1.94m</td>
                    </tr>
                </table>
                <br><br>

                <strong>2.- Paco fue a los videos juegos y cambió $37.00 para poder jugar, si las fichas valen
                    50.00 ctvos. ¿Cuántas fichas le dieron?</strong><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p2', 1) !!}&nbsp a) 32</td>
                        <td>{!! Form::radio('p2', 2) !!}&nbsp b) 63</td>
                        <td>{!! Form::radio('p2', 3) !!}&nbsp c) 74</td>
                        <td>{!! Form::radio('p2', 4) !!}&nbsp d) 83</td>
                        <td>{!! Form::radio('p2', 5) !!}&nbsp e) 93</td>
                    </tr>
                </table>
                <br><br>

                <strong>3.- La suma de los CD´s de Ana y Silvia es de 28, si la diferencia de CD´s entre ellas
                es de 8. ¿Cuáles son los números que corresponden a la cantidad de CD´s que
                    cada una tiene?</strong><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p3', 1) !!}&nbsp a) 11,17</td>
                        <td>{!! Form::radio('p3', 2) !!}&nbsp b) 10,18</td>
                        <td>{!! Form::radio('p3', 3) !!}&nbsp c) 19,9</td>
                        <td>{!! Form::radio('p3', 4) !!}&nbsp d) 21,7</td>
                        <td>{!! Form::radio('p3', 5) !!}&nbsp e) 20,8</td>
                    </tr>
                </table>
                <br><br>

                <strong>4.- La jornada de trabajo completa es de 8 horas y su pago es de $ 40.00. ¿Cuánto
                    recibe un trabajador al mes si trabaja 20 días completos y 10 días medio tiempo?</strong><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p4', 1) !!}&nbsp a) $1020.00</td>
                        <td>{!! Form::radio('p4', 2) !!}&nbsp b) $1000.00</td>
                        <td>{!! Form::radio('p4', 3) !!}&nbsp c) $1080.0</td>
                        <td>{!! Form::radio('p4', 4) !!}&nbsp d) $1110.00</td>
                        <td>{!! Form::radio('p4', 5) !!}&nbsp e) $1140.00</td>
                    </tr>
                </table>
                <br><br>

                <strong>5.- ¿Qué triángulo sigue en la serie?</strong><br>

                <div style="margin-left: 5%">
                    <img width="700" height=150" src="images/12_Aprendizaje_matematicas/trian.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p5', 1) !!}&nbsp a) 11,13,24</td>
                        <td>{!! Form::radio('p5', 2) !!}&nbsp b) 12,13,25</td>
                        <td>{!! Form::radio('p5', 3) !!}&nbsp c) 14,16,30</td>
                        <td>{!! Form::radio('p5', 4) !!}&nbsp d) 15,17,32</td>
                        <td>{!! Form::radio('p5', 5) !!}&nbsp e) 18,20,38</td>
                    </tr>
                </table>
                <br><br>

                <strong>6.- ¿Qué opción contiene los números que van en la cuarta figura?</strong><br>

                <div style="margin-left: 5%">
                    <img width="700" height=150" src="images/12_Aprendizaje_matematicas/trian2.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td>{!! Form::radio('p6', 1) !!}&nbsp a) 9,36</td>
                        <td>{!! Form::radio('p6', 2) !!}&nbsp b) 10,40</td>
                        <td>{!! Form::radio('p6', 3) !!}&nbsp c) 11,44</td>
                        <td>{!! Form::radio('p6', 4) !!}&nbsp d) 12,48</td>
                        <td>{!! Form::radio('p6', 5) !!}&nbsp e) 13,52</td>
                    </tr>
                </table>
                <br><br>

                <strong>7.- ¿Qué triángulo sigue a esta serie?</strong><br>
                <div style="margin-left: 19%">
                    <img width="500" height=100" src="images/12_Aprendizaje_matematicas/trian3.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_1.png"></td>
                        <td>{!! Form::radio('p7', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_2.png"></td>
                        <td>{!! Form::radio('p7', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_3.png"></td>
                        <td>{!! Form::radio('p7', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_4.png"></td>
                        <td>{!! Form::radio('p7', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_5.png"></td>
                        <td>{!! Form::radio('p7', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br>

                <strong>8.- ¿Cuál es la figura siguiente en esta serie?</strong><br>
                <div style="margin-left: 25%">
                    <img width="400" height=100" src="images/12_Aprendizaje_matematicas/figu.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f1.png"></td>
                        <td>{!! Form::radio('p8', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f2.png"></td>
                        <td>{!! Form::radio('p8', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f3.png"></td>
                        <td>{!! Form::radio('p8', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f4.png"></td>
                        <td>{!! Form::radio('p8', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f5.png"></td>
                        <td>{!! Form::radio('p8', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br><br>

                <strong>9.- Elija de las cinco propuestas, la que guarda esa misma relación con la tercera.</strong><br>

                <div style="margin-left: 13%">
                    <img width="600" height=100" src="images/12_Aprendizaje_matematicas/circ.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c1.png"></td>
                        <td>{!! Form::radio('p9', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c2.png"></td>
                        <td>{!! Form::radio('p9', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c3.png"></td>
                        <td>{!! Form::radio('p9', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c4.png"></td>
                        <td>{!! Form::radio('p9', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c5.png"></td>
                        <td>{!! Form::radio('p9', 5) !!}&nbsp e)</td>

                    </tr>
                </table>
                <br><br><br>

                <strong>10- Encuentra la figura que falta:</strong><br>
                <div style="margin-left: 13%">
                    <img width="600" height=100" src="images/12_Aprendizaje_matematicas/cuad.png">
                </div><br>

                <table class="col-sm-12">

                    <tr>
                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad1.png"></td>
                        <td>{!! Form::radio('p10', 1) !!}&nbsp a)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad2.png"></td>
                        <td>{!! Form::radio('p10', 2) !!}&nbsp b)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad3.png"></td>
                        <td>{!! Form::radio('p10', 3) !!}&nbsp c)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad4.png"></td>
                        <td>{!! Form::radio('p10', 4) !!}&nbsp d)</td>

                        <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad5.png"></td>
                        <td>{!! Form::radio('p10', 5) !!}&nbsp e)</td>
                    </tr>
                </table>

                <br><br><br>

                <div class="form-group">
                    {!! Form::submit('Guardar',['class'=>'form-control btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    {!! Form::open(['method'=>'POST', 'action'=>'MatsController@edit_mat_1']) !!}

                    <strong>1.- El área de la puerta de un edificio mide y su altura es de 2.40 m ¿Cuál
                        es el ancho de la puerta?</strong><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p1_e', 1, $f_decode1==1 ? 1: 0) !!}&nbsp a) 1.80m</td>
                            <td>{!! Form::radio('p1_e', 2, $f_decode1==2 ? 2: 0) !!}&nbsp b) 1.85m</td>
                            <td>{!! Form::radio('p1_e', 3, $f_decode1==3 ? 3: 0) !!}&nbsp c) 1.90m</td>
                            <td>{!! Form::radio('p1_e', 4, $f_decode1==4 ? 4: 0) !!}&nbsp d) 1.92m</td>
                            <td>{!! Form::radio('p1_e', 5, $f_decode1==5 ? 5: 0) !!}&nbsp e) 1.94m</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>2.- Paco fue a los videos juegos y cambió $37.00 para poder jugar, si las fichas valen
                        50.00 ctvos. ¿Cuántas fichas le dieron?</strong><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p2_e', 1, $f_decode2==1 ? 1: 0) !!}&nbsp a) 32</td>
                            <td>{!! Form::radio('p2_e', 2, $f_decode2==2 ? 2: 0) !!}&nbsp b) 63</td>
                            <td>{!! Form::radio('p2_e', 3, $f_decode2==3 ? 3: 0) !!}&nbsp c) 74</td>
                            <td>{!! Form::radio('p2_e', 4, $f_decode2==4 ? 4: 0) !!}&nbsp d) 83</td>
                            <td>{!! Form::radio('p2_e', 5, $f_decode2==5 ? 5: 0) !!}&nbsp e) 93</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>3.- La suma de los CD´s de Ana y Silvia es de 28, si la diferencia de CD´s entre ellas
                        es de 8. ¿Cuáles son los números que corresponden a la cantidad de CD´s que
                        cada una tiene?</strong><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p3_e', 1, $f_decode3==1 ? 1: 0) !!}&nbsp a) 11,17</td>
                            <td>{!! Form::radio('p3_e', 2, $f_decode3==2 ? 2: 0) !!}&nbsp b) 10,18</td>
                            <td>{!! Form::radio('p3_e', 3, $f_decode3==3 ? 3: 0) !!}&nbsp c) 19,9</td>
                            <td>{!! Form::radio('p3_e', 4, $f_decode3==4 ? 4: 0) !!}&nbsp d) 21,7</td>
                            <td>{!! Form::radio('p3_e', 5, $f_decode3==5 ? 5: 0) !!}&nbsp e) 20,8</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>4.- La jornada de trabajo completa es de 8 horas y su pago es de $ 40.00. ¿Cuánto
                        recibe un trabajador al mes si trabaja 20 días completos y 10 días medio tiempo?</strong><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p4_e', 1, $f_decode4==1 ? 1: 0) !!}&nbsp a) $1020.00</td>
                            <td>{!! Form::radio('p4_e', 2, $f_decode4==2 ? 2: 0) !!}&nbsp b) $1000.00</td>
                            <td>{!! Form::radio('p4_e', 3, $f_decode4==3 ? 3: 0) !!}&nbsp c) $1080.0</td>
                            <td>{!! Form::radio('p4_e', 4, $f_decode4==4 ? 4: 0) !!}&nbsp d) $1110.00</td>
                            <td>{!! Form::radio('p4_e', 5, $f_decode4==5 ? 5: 0) !!}&nbsp e) $1140.00</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>5.- ¿Qué triángulo sigue en la serie?</strong><br>

                    <div style="margin-left: 5%">
                        <img width="700" height=150" src="images/12_Aprendizaje_matematicas/trian.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p5_e', 1, $f_decode5==1 ? 1: 0) !!}&nbsp a) 11,13,24</td>
                            <td>{!! Form::radio('p5_e', 2, $f_decode5==2 ? 2: 0) !!}&nbsp b) 12,13,25</td>
                            <td>{!! Form::radio('p5_e', 3, $f_decode5==3 ? 3: 0) !!}&nbsp c) 14,16,30</td>
                            <td>{!! Form::radio('p5_e', 4, $f_decode5==4 ? 4: 0) !!}&nbsp d) 15,17,32</td>
                            <td>{!! Form::radio('p5_e', 5, $f_decode5==5 ? 5: 0) !!}&nbsp e) 18,20,38</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>6.- ¿Qué opción contiene los números que van en la cuarta figura?</strong><br>

                    <div style="margin-left: 5%">
                        <img width="700" height=150" src="images/12_Aprendizaje_matematicas/trian2.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td>{!! Form::radio('p6_e', 1, $f_decode6==1 ? 1: 0) !!}&nbsp a) 9,36</td>
                            <td>{!! Form::radio('p6_e', 2, $f_decode6==2 ? 2: 0) !!}&nbsp b) 10,40</td>
                            <td>{!! Form::radio('p6_e', 3, $f_decode6==3 ? 3: 0) !!}&nbsp c) 11,44</td>
                            <td>{!! Form::radio('p6_e', 4, $f_decode6==4 ? 4: 0) !!}&nbsp d) 12,48</td>
                            <td>{!! Form::radio('p6_e', 5, $f_decode6==5 ? 5: 0) !!}&nbsp e) 13,52</td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>7.- ¿Qué triángulo sigue a esta serie?</strong><br>
                    <div style="margin-left: 19%">
                        <img width="500" height=100" src="images/12_Aprendizaje_matematicas/trian3.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_1.png"></td>
                            <td>{!! Form::radio('p7_e', 1, $f_decode7==1 ? 1: 0) !!}&nbsp a)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_2.png"></td>
                            <td>{!! Form::radio('p7_e', 2, $f_decode7==2 ? 2: 0) !!}&nbsp b)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_3.png"></td>
                            <td>{!! Form::radio('p7_e', 3, $f_decode7==3 ? 3: 0) !!}&nbsp c)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_4.png"></td>
                            <td>{!! Form::radio('p7_e', 4, $f_decode7==4 ? 4: 0) !!}&nbsp d)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/t3_5.png"></td>
                            <td>{!! Form::radio('p7_e', 5, $f_decode7==5 ? 5: 0) !!}&nbsp e)</td>

                        </tr>
                    </table>
                    <br><br>

                    <strong>8.- ¿Cuál es la figura siguiente en esta serie?</strong><br>
                    <div style="margin-left: 25%">
                        <img width="400" height=100" src="images/12_Aprendizaje_matematicas/figu.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f1.png"></td>
                            <td>{!! Form::radio('p8_e', 1, $f_decode8==1 ? 1: 0) !!}&nbsp a)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f2.png"></td>
                            <td>{!! Form::radio('p8_e', 2, $f_decode8==2 ? 2: 0) !!}&nbsp b)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f3.png"></td>
                            <td>{!! Form::radio('p8_e', 3, $f_decode8==3 ? 3: 0) !!}&nbsp c)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f4.png"></td>
                            <td>{!! Form::radio('p8_e', 4, $f_decode8==4 ? 4: 0) !!}&nbsp d)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/f5.png"></td>
                            <td>{!! Form::radio('p8_e', 5, $f_decode8==5 ? 5: 0) !!}&nbsp e)</td>

                        </tr>
                    </table>
                    <br><br><br>

                    <strong>9.- Elija de las cinco propuestas, la que guarda esa misma relación con la tercera.</strong><br>

                    <div style="margin-left: 13%">
                        <img width="600" height=100" src="images/12_Aprendizaje_matematicas/circ.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c1.png"></td>
                            <td>{!! Form::radio('p9_e', 1, $f_decode9==1 ? 1: 0) !!}&nbsp a)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c2.png"></td>
                            <td>{!! Form::radio('p9_e', 2, $f_decode9==2 ? 2: 0) !!}&nbsp b)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c3.png"></td>
                            <td>{!! Form::radio('p9_e', 3, $f_decode9==3 ? 3: 0) !!}&nbsp c)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c4.png"></td>
                            <td>{!! Form::radio('p9_e', 4, $f_decode9==4 ? 4: 0) !!}&nbsp d)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/c5.png"></td>
                            <td>{!! Form::radio('p9_e', 5, $f_decode9==5 ? 5: 0) !!}&nbsp e)</td>

                        </tr>
                    </table>
                    <br><br><br>

                    <strong>10- Encuentra la figura que falta:</strong><br>
                    <div style="margin-left: 13%">
                        <img width="600" height=100" src="images/12_Aprendizaje_matematicas/cuad.png">
                    </div><br>

                    <table class="col-sm-12">

                        <tr>
                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad1.png"></td>
                            <td>{!! Form::radio('p10_e', 1, $f_decode10==1 ? 1: 0) !!}&nbsp a)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad2.png"></td>
                            <td>{!! Form::radio('p10_e', 2, $f_decode10==2 ? 2: 0) !!}&nbsp b)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad3.png"></td>
                            <td>{!! Form::radio('p10_e', 3, $f_decode10==3 ? 3: 0) !!}&nbsp c)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad4.png"></td>
                            <td>{!! Form::radio('p10_e', 4, $f_decode10==4 ? 4: 0) !!}&nbsp d)</td>

                            <td><img width="50" height=50" src="images/12_Aprendizaje_matematicas/cuad5.png"></td>
                            <td>{!! Form::radio('p10_e', 5, $f_decode10==5 ? 5: 0) !!}&nbsp e)</td>
                        </tr>
                    </table>

                    <br><br><br>

                    <div class="form-group">
                        {!! Form::submit('Edit',['class'=>'form-control btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif




            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mat_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mat_l_2')}}"><strong>Lecturas</strong></a></li>
            <li><a href="{{url('/mat_1')}}" style="background-color: lightgray;">Ejercicio 1</a></li>
            <li><a href="{{url('/mat_2')}}">Ejercicio 2</a></li>
            <li>
                <a href="{{url('/mat_2')}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  </div>
@stop

@section('scripts')
<script>
    $(document).ready(function(){
        var i=1;

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
