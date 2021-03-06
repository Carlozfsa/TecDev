@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INFERENCIAS LÓGICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">Cómo obtener deducciones</p></strong><br>


                <strong>INSTRUCCIONES:</strong> Lea cuidadosamente cada enunciado y realizando las
                deducciones adecuadas, encuentra la respuesta al cuestionamiento que se plantea
                en cada uno de ellos.<br><br>

                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'TutorInferenciasController@store_inf_2']) !!}

                @if($t1 != NULL && $t2 != NULL && $t3 != NULL && $t4 != NULL && $t5 != NULL && $t6 != NULL && $t7 != NULL)

                <ol>
                    <li>
                        Si un hombre tarda 12 minutos en cortar un tronco en tres partes ¿Cuánto
                        tardará en cortar un tronco de iguales características pero en cuatro partes<br>
                        {!! Form::textarea('t1',$t1,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        María tiene tres cajas llenas de loza, identificadas con etiquetas que indican
                        “platos”, “tazas” y “platos y tazas”. Por desgracia, las etiquetas están puestas
                        erróneamente en las cajas, es decir, la etiqueta no coincide con el contenido de
                        la caja. Si María puede tomar únicamente una pieza de una sola caja ¿Cómo
                        podrá arreglar correctamente las etiquetas en su respectiva caja?<br>
                        {!! Form::textarea('t2',$t2,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        A orillas de un río se encuentran tres caníbales y tres misioneros. Todos deben
                        cruzar el río y para ello sólo cuentan con una canoa en la cual caben
                        únicamente dos personas. Los tres misioneros están en condiciones de poder
                        remar pero de los caníbales sólo uno puede hacerlo. Si en algún momento
                        llega a haber más caníbales que misioneros en una orilla, los caníbales
                        comerán a los misioneros.<br>
                        ¿Cómo podrían cruzar todos los ríos sin que haya bajas entre misioneros?<br>
                        {!! Form::textarea('t3',$t3,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        Según la mitología griega, existen tres estatuas que hablan: una dice siempre
                        la verdad, otra siempre miente y la otra a veces miente y a veces dice la
                        verdad; son los dioses de la verdad, la mentira y la diplomacia
                        respectivamente.<br>
                        Un sacerdote ciego, bajo pena de muerte, tenía que decir con certeza cuál era
                        cada una, pudiendo formular una sola pregunta a cada estatua a las que
                        identificó como 1, 2 y 3.<br>
                        A la primera estatua le preguntó: ¿Quién es el dios de en medio?<br>
                        La estatua respondió: “Es el dios de la verdad”.<br>
                        A la estatua de en medio le preguntó: “¿Quién eres tú?<br>
                        La estatua respondió: “Soy el dios de la Diplomacia.<br>
                        A la tercera estatua le preguntó: ¿Quién es el dios de en medio?<br>
                        La estatua respondió: “Es el dios de la mentira”.<br>
                        Con estos datos el sacerdote pudo identificar correctamente a cada estatua
                        salvando con ello su vida. ¿Puedes reproducir el proceso deductivo que siguió?
                        Explíquelo.
                            {!! Form::textarea('t4',$t4,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        Se tiene un lote de 55 monedas entre las que se encuentra una falsa. Se sabe
                        que las monedas “buenas” pesan 11 gr. Si se tiene 10 básculas de precisión
                        que sólo pueden ser usadas 1 vez, cada una ¿Cómo haría para encontrar la
                        moneda falsa?<br>
                        {!! Form::textarea('t5',$t5,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        Elia y Martha platican sobre algunos chicos de su escuela y llegan a la
                        siguiente situación. Elia quiere que su novio sea un chico alto, moreno y
                        elegante. En su salón hay cuatro muchachos que le agradan: Alfonso, Carlos,
                        Enrique y Pablo. Pero solo uno de ellos tiene las tres características que ella
                        espera:<br>
                        ― Pablo, Alfonso y Carlos son altos.<br>
                        ― Enrique, Pablo y Alfonso son elegantes.<br>
                        ― Alfonso es rubio.<br>
                        ¿Con cuál crees que quiere andar de novia?<br>
                        {!! Form::textarea('t6',$t6,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        El gerente, el contador, el cajero y el auditor de un banco son el Sr. Blanco, la
                        Sra. Violeta, el Sr. Moreno, y la Sra. Rosa, pero el vigilante nunca atina a saber
                        que puesto tiene cada uno aunque si se sabe sus nombres. Sabe que:<br>
                        ― El auditor y el gerente están casados.<br>
                        ― El Sr. Moreno es más alto que el auditor y el cajero.<br>
                        ― El gerente almuerza solo.<br>
                        ― El Sr. Blanco juega cartas con la Sra. Rosa.<br>
                        ― El más alto de los cuatro juega baloncesto.<br>
                        ― La Sra. Violeta almuerza con el auditor y con el cajero.<br>
                        ― El Sr. Moreno no hace deporte.<br>
                        ¿Puedes ayudar al vigilante a saber qué puesto tiene cada uno de ellos?<br>
                        {!! Form::textarea('t7',$t7,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                </ol>

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
                            <textarea rows="5" name ="retro2" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal2" class="form-control name_list center-block">
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

                        {!! Form::open(['method'=>'POST', 'action'=>'TutorInferenciasController@edit_inf_2']) !!}

                            @if($t1 != NULL && $t2 != NULL && $t3 != NULL && $t4 != NULL && $t5 != NULL && $t6 != NULL && $t7 != NULL)

                        <ol>
                            <li>
                                Si un hombre tarda 12 minutos en cortar un tronco en tres partes ¿Cuánto
                                tardará en cortar un tronco de iguales características pero en cuatro partes<br>
                                {!! Form::textarea('t1',$t1,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                María tiene tres cajas llenas de loza, identificadas con etiquetas que indican
                                “platos”, “tazas” y “platos y tazas”. Por desgracia, las etiquetas están puestas
                                erróneamente en las cajas, es decir, la etiqueta no coincide con el contenido de
                                la caja. Si María puede tomar únicamente una pieza de una sola caja ¿Cómo
                                podrá arreglar correctamente las etiquetas en su respectiva caja?<br>
                                {!! Form::textarea('t2',$t2,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                A orillas de un río se encuentran tres caníbales y tres misioneros. Todos deben
                                cruzar el río y para ello sólo cuentan con una canoa en la cual caben
                                únicamente dos personas. Los tres misioneros están en condiciones de poder
                                remar pero de los caníbales sólo uno puede hacerlo. Si en algún momento
                                llega a haber más caníbales que misioneros en una orilla, los caníbales
                                comerán a los misioneros.<br>
                                ¿Cómo podrían cruzar todos los ríos sin que haya bajas entre misioneros?<br>
                                {!! Form::textarea('t3',$t3,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                Según la mitología griega, existen tres estatuas que hablan: una dice siempre
                                la verdad, otra siempre miente y la otra a veces miente y a veces dice la
                                verdad; son los dioses de la verdad, la mentira y la diplomacia
                                respectivamente.<br>
                                Un sacerdote ciego, bajo pena de muerte, tenía que decir con certeza cuál era
                                cada una, pudiendo formular una sola pregunta a cada estatua a las que
                                identificó como 1, 2 y 3.<br>
                                A la primera estatua le preguntó: ¿Quién es el dios de en medio?<br>
                                La estatua respondió: “Es el dios de la verdad”.<br>
                                A la estatua de en medio le preguntó: “¿Quién eres tú?<br>
                                La estatua respondió: “Soy el dios de la Diplomacia.<br>
                                A la tercera estatua le preguntó: ¿Quién es el dios de en medio?<br>
                                La estatua respondió: “Es el dios de la mentira”.<br>
                                Con estos datos el sacerdote pudo identificar correctamente a cada estatua
                                salvando con ello su vida. ¿Puedes reproducir el proceso deductivo que siguió?
                                Explíquelo.
                                {!! Form::textarea('t4',$t4,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                Se tiene un lote de 55 monedas entre las que se encuentra una falsa. Se sabe
                                que las monedas “buenas” pesan 11 gr. Si se tiene 10 básculas de precisión
                                que sólo pueden ser usadas 1 vez, cada una ¿Cómo haría para encontrar la
                                moneda falsa?<br>
                                {!! Form::textarea('t5',$t5,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                Elia y Martha platican sobre algunos chicos de su escuela y llegan a la
                                siguiente situación. Elia quiere que su novio sea un chico alto, moreno y
                                elegante. En su salón hay cuatro muchachos que le agradan: Alfonso, Carlos,
                                Enrique y Pablo. Pero solo uno de ellos tiene las tres características que ella
                                espera:<br>
                                ― Pablo, Alfonso y Carlos son altos.<br>
                                ― Enrique, Pablo y Alfonso son elegantes.<br>
                                ― Alfonso es rubio.<br>
                                ¿Con cuál crees que quiere andar de novia?<br>
                                {!! Form::textarea('t6',$t6,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                            <li>
                                El gerente, el contador, el cajero y el auditor de un banco son el Sr. Blanco, la
                                Sra. Violeta, el Sr. Moreno, y la Sra. Rosa, pero el vigilante nunca atina a saber
                                que puesto tiene cada uno aunque si se sabe sus nombres. Sabe que:<br>
                                ― El auditor y el gerente están casados.<br>
                                ― El Sr. Moreno es más alto que el auditor y el cajero.<br>
                                ― El gerente almuerza solo.<br>
                                ― El Sr. Blanco juega cartas con la Sra. Rosa.<br>
                                ― El más alto de los cuatro juega baloncesto.<br>
                                ― La Sra. Violeta almuerza con el auditor y con el cajero.<br>
                                ― El Sr. Moreno no hace deporte.<br>
                                ¿Puedes ayudar al vigilante a saber qué puesto tiene cada uno de ellos?<br>
                                {!! Form::textarea('t7',$t7,['class'=>'form-control', 'rows'=>'3']) !!}
                            </li><br>

                        </ol>

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
