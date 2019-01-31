@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong>CREATIVIDAD, RESOLUCIÓN DE PROBLEMAS Y TOMA DE DECISIONES</strong><br>
                </p>

                <p>
                    <strong>4. Creatividad, Resolución de problemas y Toma de Decisiones:</strong>
                    Se estimula el pensamiento reflexivo y la búsqueda de soluciones a diferentes tipos de
                    problemas, que incluyen también a la correcta toma de decisiones. También
                    se desarrolla la capacidad de imaginar, inventar y crear.
                </p><br>

                <strong>EJERCICIOS DE CREATIVIDAD, RESOLUCIÓN DE PROBLEMAS Y TOMA
                                  DE DECISIONES</strong><br>

                <p>
                    Los acertijos de creatividad y pensamiento lateral a menudo son situaciones
                    extrañas que exigen una explicación. Se resuelven a través del diálogo entre
                    el maestro acertijista, que plantea el problema, y el solucionador o
                    solucionadores, que tratan de descubrir la respuesta.<br><br>
                    En algunos casos, los acertijos, tal como se presentan, por lo general no
                    contienen información suficiente para que el solucionador descubra la
                    solución. Así que una parte crucial del proceso es hacer las preguntas. Las
                    preguntas pueden recibir una de sólo tres respuestas posibles: sí, no, o no
                    tiene importancia. Cuando una línea de investigación alcanza un punto final,
                    sin encontrar una solución satisfactoria, entonces se necesita otro enfoque, a
                    menudo desde una dirección totalmente nueva. Allí es donde aparece el
                    pensamiento lateral.<br><br>
                    Hay personas que encuentran frustrante el hecho de que sea posible construir
                    varias respuestas que encajan con el planteo inicial del acertijo. Sin embargo,
                    para un buen acertijo de pensamiento lateral, la respuesta correcta será la
                    “mejor”, en el sentido de la más apta y satisfactoria. En la vida real, también,
                    la mayoría de los problemas tiene más de una solución posible. Un buen
                    pensador lateral no aceptará la primera solución que encuentre sino que
                    seguirá buscando enfoques nuevos y creativos.<br><br>
                    Estos problemas te enseñarán a revisar sus suposiciones sobre cualquier
                    situación. Se necesita ser flexible, creativo y de mente abierta en las
                    preguntas, y capaz de combinar montones de claves y fragmentos de
                    información distintos. Una vez que llegues a una solución viable, sigue
                    adelante para refinarla o remplazarla con una solución mejor. ¡Eso es el
                    pensamiento lateral!<br>
                </p>


                <strong>EL PROBLEMA DE LAS DOS PIEDRITAS</strong><br>
                Años atrás, un mercader londinense quedó debiendo una gran suma de dinero a
                una persona que le hizo un préstamo. Esta persona se enamoró de la joven y
                linda hija del mercader. Le propuso, entonces, un acuerdo. Dijo que cancelaría la
                deuda del mercader si se casaba con la hija. Tanto el mercader como su hija
                quedaron despavoridos. La persona que le había prestado el dinero, le propuso
                entonces dejar la solución del caso a la Providencia.<br><br>
                Para eso, sugirió colocar una piedra blanca y otra negra dentro de una bolsa de
                dinero vacía; la muchacha debería retirar una de las dos piedras.<br><br>
                Si retiraba la piedra blanca, permanecería con el padre y la deuda se perdonaría.
                Pero si se rehusaba a retirar la piedra, el padre seria encarcelado y ella moriría
                de hambre. El mercader tuvo que aceptar forzado.<br><br>
                Ellos se encontraron en el jardín del mercader, y en el mismo había un camino
                lleno de piedras blancas y negras (llamadas granza), en el jardín del mercader.
                El acreedor se agachó para levantar dos piedras, y al hacerlo, tomó muy
                rápidamente dos piedras negras y las colocó en la bolsa de dinero, sin dudas
                para hacer trampa; pero fue visto por la muchacha. Le pidió entonces a la joven
                que retirara la piedra, que sellaría no sólo su suerte sino también la de su padre.<br><br>


                <p>¿Qué podría hacer la muchacha para revertir esta situación?</p><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@store_int_mult_ej_4']) !!}

                    @if($prob1 != NULL)

                    <table>
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::label('r1.1', 'R=') !!}</td>
                            <td class="col-sm-12">{!! Form::label('', $prob1, ['class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table><br>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro4" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal4" class="form-control name_list center-block">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                        </td>
                    </tr>
                </table>


                {!! Form::close() !!}

                @else

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@edit_int_mult_ej_4']) !!}

                    @if($prob1 != NULL)

                    <table>
                        <tr>
                            <div class="form-group">
                                <td>{!! Form::label('r1.1', 'R=') !!}</td>
                                <td class="col-sm-12">{!! Form::label('r1.1', $prob1) !!}</td>
                            </div>
                        </tr>
                    </table><br>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif


                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro_e" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal_e" class="form-control name_list center-block" value="{{$cal}}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Editar" />
                            </td>
                        </tr>
                    </table>


                    {!! Form::close() !!}

                @endif

                <p style="margin-left: 45%;">http://www.tecnicas-de-estudio.org/inteligencia/ejercicios.htm</p>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
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
