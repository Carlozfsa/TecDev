@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INFERENCIAS LÓGICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'InferenciasController@store_inf_2']) !!}

                <ol>
                    <li>
                        Si un hombre tarda 12 minutos en cortar un tronco en tres partes ¿Cuánto
                        tardará en cortar un tronco de iguales características pero en cuatro partes<br>
                        {!! Form::textarea('t1',null,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        María tiene tres cajas llenas de loza, identificadas con etiquetas que indican
                        “platos”, “tazas” y “platos y tazas”. Por desgracia, las etiquetas están puestas
                        erróneamente en las cajas, es decir, la etiqueta no coincide con el contenido de
                        la caja. Si María puede tomar únicamente una pieza de una sola caja ¿Cómo
                        podrá arreglar correctamente las etiquetas en su respectiva caja?<br>
                        {!! Form::textarea('t2',null,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        A orillas de un río se encuentran tres caníbales y tres misioneros. Todos deben
                        cruzar el río y para ello sólo cuentan con una canoa en la cual caben
                        únicamente dos personas. Los tres misioneros están en condiciones de poder
                        remar pero de los caníbales sólo uno puede hacerlo. Si en algún momento
                        llega a haber más caníbales que misioneros en una orilla, los caníbales
                        comerán a los misioneros.<br>
                        ¿Cómo podrían cruzar todos los ríos sin que haya bajas entre misioneros?<br>
                        {!! Form::textarea('t3',null,['class'=>'form-control', 'rows'=>'3']) !!}
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
                            {!! Form::textarea('t4',null,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                    <li>
                        Se tiene un lote de 55 monedas entre las que se encuentra una falsa. Se sabe
                        que las monedas “buenas” pesan 11 gr. Si se tiene 10 básculas de precisión
                        que sólo pueden ser usadas 1 vez, cada una ¿Cómo haría para encontrar la
                        moneda falsa?<br>
                        {!! Form::textarea('t5',null,['class'=>'form-control', 'rows'=>'3']) !!}
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
                        {!! Form::textarea('t6',null,['class'=>'form-control', 'rows'=>'3']) !!}
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
                        {!! Form::textarea('t7',null,['class'=>'form-control', 'rows'=>'3']) !!}
                    </li><br>

                </ol>

                <div class="form-group">
                    {!! Form::submit('Guardar',['class'=>'btn btn-primary form-control']) !!}
                </div>

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <strong><p style="text-align: center;">Cómo obtener deducciones</p></strong><br>


                    <strong>INSTRUCCIONES:</strong> Lea cuidadosamente cada enunciado y realizando las
                    deducciones adecuadas, encuentra la respuesta al cuestionamiento que se plantea
                    en cada uno de ellos.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'InferenciasController@edit_inf_2']) !!}

                    <ol>
                        <li>
                            Si un hombre tarda 12 minutos en cortar un tronco en tres partes ¿Cuánto
                            tardará en cortar un tronco de iguales características pero en cuatro partes<br>
                            {!! Form::textarea('t1_e',$f_decode1,['class'=>'form-control', 'rows'=>'3']) !!}
                        </li><br>

                        <li>
                            María tiene tres cajas llenas de loza, identificadas con etiquetas que indican
                            “platos”, “tazas” y “platos y tazas”. Por desgracia, las etiquetas están puestas
                            erróneamente en las cajas, es decir, la etiqueta no coincide con el contenido de
                            la caja. Si María puede tomar únicamente una pieza de una sola caja ¿Cómo
                            podrá arreglar correctamente las etiquetas en su respectiva caja?<br>
                            {!! Form::textarea('t2_e',$f_decode2,['class'=>'form-control', 'rows'=>'3']) !!}
                        </li><br>

                        <li>
                            A orillas de un río se encuentran tres caníbales y tres misioneros. Todos deben
                            cruzar el río y para ello sólo cuentan con una canoa en la cual caben
                            únicamente dos personas. Los tres misioneros están en condiciones de poder
                            remar pero de los caníbales sólo uno puede hacerlo. Si en algún momento
                            llega a haber más caníbales que misioneros en una orilla, los caníbales
                            comerán a los misioneros.<br>
                            ¿Cómo podrían cruzar todos los ríos sin que haya bajas entre misioneros?<br>
                            {!! Form::textarea('t3_e',$f_decode3,['class'=>'form-control', 'rows'=>'3']) !!}
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
                            {!! Form::textarea('t4_e',$f_decode4,['class'=>'form-control', 'rows'=>'3']) !!}
                        </li><br>

                        <li>
                            Se tiene un lote de 55 monedas entre las que se encuentra una falsa. Se sabe
                            que las monedas “buenas” pesan 11 gr. Si se tiene 10 básculas de precisión
                            que sólo pueden ser usadas 1 vez, cada una ¿Cómo haría para encontrar la
                            moneda falsa?<br>
                            {!! Form::textarea('t5_e',$f_decode5,['class'=>'form-control', 'rows'=>'3']) !!}
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
                            {!! Form::textarea('t6_e',$f_decode6,['class'=>'form-control', 'rows'=>'3']) !!}
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
                            {!! Form::textarea('t7_e',$f_decode7,['class'=>'form-control', 'rows'=>'3']) !!}
                        </li><br>

                    </ol>

                    <div class="form-group">
                        {!! Form::submit('Editar',['class'=>'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

    <div class="center-block" style="margin-left:23%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/inf_1')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/inf_1')}}">Ejercicio 1</a></li>
                <li><a href="{{url('/inf_2')}}" style="background-color: lightgray;">Ejercicio 2</a></li>
                <li><a href="{{url('/rel_sim_1')}}"><strong>Siguiente actividad</strong></a></li>
                <li>
                    <a href="{{url('/rel_sim_1')}}" aria-label="Next">
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
