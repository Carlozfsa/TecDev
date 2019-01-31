@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                    <strong><p style="text-align: center;">La lectura rápida</p></strong><br>

                    Una lectura rápida no solo se consigue con un movimiento adecuado de los ojos, se
                    debe:<br><br>

                    <ul>
                        <li>Ampliar el vocabulario y con ello incrementar capacidad de la comprensión de
                            lo que se lee.</li><br>

                        <li>Hacer una lectura inteligente.</li>
                        <br>
                    </ul>

                    La lectura rápida solo es posible cuando estamos muy familiarizados con el lenguaje
                    y su contenido.<br>

                    La fórmula para calcular la velocidad en palabras por minuto es la siguiente:<br><br>

                    <table style="margin-left: 5%;">
                        <tr>
                            <td rowspan="4"><strong>Palabras por minuto (velocidad) =</strong></td>
                        </tr>
                        <tr>
                            <td style="border-color: black;">Número de páginas leídas x Número
                                medio de palabras por página
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ________________________________________________________
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Número de minutos empleados en la
                                lectura
                            </td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>Ejercicio</strong><br><br>

                    <ol>
                        <li>
                            Después de calcular su velocidad de lectura en palabras por minuto, anote la
                            cifra en la gráfica.
                        </li>
                        <li>
                            Ejercite el movimiento de los ojos sobre una página, moviéndolos en planos
                            horizontales y verticales, en diagonal desde el ángulo superior izquierdo al
                            ángulo inferior derecho y luego desde el ángulo superior derecho al ángulo
                            inferior izquierdo. Finalidad: acostumbrar a los ojos a moverse con mayor
                            precisión e independencia
                        </li>
                        <li>
                            Lea normalmente durante 5 minutos un libro que pueda seguir utilizando.
                            Anote su velocidad de lectura en palabras por minuto en la gráfica.
                        </li>
                        <li>
                            Intente pasar 100 páginas a una velocidad aproximada de una página cada 2
                            segundos, moviendo muy rápidamente los ojos de arriba abajo (sesiones de 2
                            x 2 minutos)
                        </li>
                        <li>
                            Lea lo más rápidamente que pueda durante 1 minuto, sin preocuparse de
                            comprender.
                            <ul>
                                <li>Lea motivado para comprender (1 minuto).</li>
                                <li>Calcule su velocidad de lectura y anótela en la gráfica.</li>
                                <li>Repita el ejercicio hasta que cumpla el tiempo fijado.</li>
                            </ul>
                        </li>
                        <li>
                            Utilice un libro cualquiera (de fácil comprensión), preferentemente uno que le
                            interese. Intente comprender lo más posible, sin olvidar que lo esencial es la
                            velocidad. En este ejercicio, la lectura debe iniciarse a partir del último punto
                            que se alcanzó la vez anterior.
                            <ul>
                                <li>Intente leer durante 1 minuto, aumentando en 100 palabras por minuto
                                    su velocidad normal más alta.
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a a)
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a b).
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a c)
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a d)
                                </li>
                                <li>
                                    Intente comprender lo que está leyendo durante 1 minuto, empezando
                                    a partir del punto que alcanzó al final de e).
                                </li>
                                <li>
                                    Calcule su velocidad de lectura en palabras por minuto y anótela en la
                                    gráfica.
                                </li>

                            </ul>
                        </li>
                    </ol>

                    <br>

                    <strong>Ejercicio de alta velocidad</strong>
                    <br>

                    <ol>
                        <li>Utilice cualquier libro de fácil comprensión. Empiece desde el principio
                            de un capitulo.
                        </li>
                        <li>
                            Intente leer con un apoyo visual tres líneas simultáneamente a una
                            velocidad mínima de 2.000 palabras por minuto durante 5 minutos.
                        </li>
                        <li>Vuelva a leer lo mismo en 4 minutos.</li>
                        <li>Vuelva a leer lo mismo en 3 minutos</li>
                        <li>Vuelva a leer lo mismo en 2 minutos.</li>
                        <li> Siga leyendo durante 5 minutos, con el mismo nivel de comprensión
                            que en b).
                        </li>
                        <li>Lea con un nivel normal de comprensión durante 1 minuto.</li>

                    </ol>
                    <br>

                    <strong>Anote su velocidad de lectura en palabras por minuto.</strong>
                    <br><br>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/pens_1')}}">
                    {{csrf_field()}}

                    <div class="table-responsive col-sm-8" style="margin-left: 12%;">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td class="col-sm-2" style="text-align: center;">a</td>
                                <td ><input type="text" name="a" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">b</td>
                                <td ><input type="text" name="b" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">c</td>
                                <td ><input type="text" name="c" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">d</td>
                                <td ><input type="text" name="d" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">e</td>
                                <td ><input type="text" name="e" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">f</td>
                                <td ><input type="text" name="f" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">g</td>
                                <td ><input type="text" name="g" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">h</td>
                                <td ><input type="text" name="h" class="form-control name_list center-block"></td>
                            </tr>

                            <tr>
                                <td class="col-sm-2" style="text-align: center;">i</td>
                                <td ><input type="text" name="i" class="form-control name_list center-block"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="row" style="margin-left: 12%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                    </div>
                </form>

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    <strong><p style="text-align: center;">La lectura rápida</p></strong><br>

                    Una lectura rápida no solo se consigue con un movimiento adecuado de los ojos, se
                    debe:<br><br>

                    <ul>
                        <li>Ampliar el vocabulario y con ello incrementar capacidad de la comprensión de
                            lo que se lee.</li><br>

                        <li>Hacer una lectura inteligente.</li>
                        <br>
                    </ul>

                    La lectura rápida solo es posible cuando estamos muy familiarizados con el lenguaje
                    y su contenido.<br>

                    La fórmula para calcular la velocidad en palabras por minuto es la siguiente:<br><br>

                    <table style="margin-left: 5%;">
                        <tr>
                            <td rowspan="4"><strong>Palabras por minuto (velocidad) =</strong></td>
                        </tr>
                        <tr>
                            <td style="border-color: black;">Número de páginas leídas x Número
                                medio de palabras por página
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ________________________________________________________
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Número de minutos empleados en la
                                lectura
                            </td>
                        </tr>
                    </table>
                    <br><br>

                    <strong>Ejercicio</strong><br><br>

                    <ol>
                        <li>
                            Después de calcular su velocidad de lectura en palabras por minuto, anote la
                            cifra en la gráfica.
                        </li>
                        <li>
                            Ejercite el movimiento de los ojos sobre una página, moviéndolos en planos
                            horizontales y verticales, en diagonal desde el ángulo superior izquierdo al
                            ángulo inferior derecho y luego desde el ángulo superior derecho al ángulo
                            inferior izquierdo. Finalidad: acostumbrar a los ojos a moverse con mayor
                            precisión e independencia
                        </li>
                        <li>
                            Lea normalmente durante 5 minutos un libro que pueda seguir utilizando.
                            Anote su velocidad de lectura en palabras por minuto en la gráfica.
                        </li>
                        <li>
                            Intente pasar 100 páginas a una velocidad aproximada de una página cada 2
                            segundos, moviendo muy rápidamente los ojos de arriba abajo (sesiones de 2
                            x 2 minutos)
                        </li>
                        <li>
                            Lea lo más rápidamente que pueda durante 1 minuto, sin preocuparse de
                            comprender.
                            <ul>
                                <li>Lea motivado para comprender (1 minuto).</li>
                                <li>Calcule su velocidad de lectura y anótela en la gráfica.</li>
                                <li>Repita el ejercicio hasta que cumpla el tiempo fijado.</li>
                            </ul>
                        </li>
                        <li>
                            Utilice un libro cualquiera (de fácil comprensión), preferentemente uno que le
                            interese. Intente comprender lo más posible, sin olvidar que lo esencial es la
                            velocidad. En este ejercicio, la lectura debe iniciarse a partir del último punto
                            que se alcanzó la vez anterior.
                            <ul>
                                <li>Intente leer durante 1 minuto, aumentando en 100 palabras por minuto
                                    su velocidad normal más alta.
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a a)
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a b).
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a c)
                                </li>
                                <li>
                                    Intente leer aumentando su velocidad en 100 palabras por minuto con
                                    respecto a d)
                                </li>
                                <li>
                                    Intente comprender lo que está leyendo durante 1 minuto, empezando
                                    a partir del punto que alcanzó al final de e).
                                </li>
                                <li>
                                    Calcule su velocidad de lectura en palabras por minuto y anótela en la
                                    gráfica.
                                </li>

                            </ul>
                        </li>
                    </ol>

                    <br>

                    <strong>Ejercicio de alta velocidad</strong>
                    <br>

                    <ol>
                        <li>Utilice cualquier libro de fácil comprensión. Empiece desde el principio
                            de un capitulo.
                        </li>
                        <li>
                            Intente leer con un apoyo visual tres líneas simultáneamente a una
                            velocidad mínima de 2.000 palabras por minuto durante 5 minutos.
                        </li>
                        <li>Vuelva a leer lo mismo en 4 minutos.</li>
                        <li>Vuelva a leer lo mismo en 3 minutos</li>
                        <li>Vuelva a leer lo mismo en 2 minutos.</li>
                        <li> Siga leyendo durante 5 minutos, con el mismo nivel de comprensión
                            que en b).
                        </li>
                        <li>Lea con un nivel normal de comprensión durante 1 minuto.</li>

                    </ol>
                    <br>

                    <strong>Anote su velocidad de lectura en palabras por minuto.</strong>
                    <br><br>


                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/pens_1')}}">
                        {{csrf_field()}}

                        <div class="table-responsive col-sm-8" style="margin-left: 12%;">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">a</td>
                                    <td ><input type="text" name="a_e" class="form-control name_list center-block" value={{$f_decode1}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">b</td>
                                    <td ><input type="text" name="b_e" class="form-control name_list center-block" value={{$f_decode2}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">c</td>
                                    <td ><input type="text" name="c_e" class="form-control name_list center-block" value={{$f_decode3}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">d</td>
                                    <td ><input type="text" name="d_e" class="form-control name_list center-block" value={{$f_decode4}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">e</td>
                                    <td ><input type="text" name="e_e" class="form-control name_list center-block" value={{$f_decode5}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">f</td>
                                    <td ><input type="text" name="f_e" class="form-control name_list center-block" value={{$f_decode6}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">g</td>
                                    <td ><input type="text" name="g_e" class="form-control name_list center-block" value={{$f_decode7}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">h</td>
                                    <td ><input type="text" name="h_e" class="form-control name_list center-block" value={{$f_decode8}}></td>
                                </tr>

                                <tr>
                                    <td class="col-sm-2" style="text-align: center;">i</td>
                                    <td ><input type="text" name="i_e" class="form-control name_list center-block" value={{$f_decode9}}></td>
                                </tr>
                            </table>
                        </div>

                        <div class="row" style="margin-left: 12%;">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                        </div>
                    </form>
                @endif

            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:13%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_l_1')}}"><strong>Lecturas</strong></a></li>
            <li><a href="{{url('/pens_1')}}" style="background-color: lightgray;">Ejercicio 1</a></li>
            <li><a href="{{url('/pens_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/pens_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/pens_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_5')}}">Ejercicio 5</a></li>
            <li>
                <a href="{{url('/pens_2')}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
  </div>
@stop

@section('scripts')
@stop
