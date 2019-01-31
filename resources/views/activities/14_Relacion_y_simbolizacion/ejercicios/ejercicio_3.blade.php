@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RELACIONES Y SIMBOLIZACIÓN</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                    <strong><p style="text-align: center;">SIMBOLIZACIÓN</p></strong><br>

                    Resulta de importancia capital cuando se trata de resolver problemas, pues permite
                    al estudiante plantear modelos simbólicos de situaciones reales. El planteo de
                    ecuaciones para resolver problemas, es un ejemplo muy significativo.
                    INSTRUCCIONES: Resuelve en forma individual el siguiente ejercicio.<br><br>

                    <strong>INSTRUCCIONES:</strong> Lea cuidadosamente las indicaciones que se dan en cada caso y
                    responda a lo que se le pide.<br><br>

                    1. Actuando como detectives, te pedimos descifrar el siguiente mensaje en clave:<br><br>

                    <div style="margin-left: 19%">
                        <img width="500" height=300" src="images/14_Relacion_y_simbolizacion/simb1.png">
                    </div><br><br>

                    <strong>Pista:</strong><br><br>
                    Se sabe que en el mensaje las letras que se repiten con más frecuencia son A, E, y
                    D, en ese orden; aparece la P; le siguen también en ese orden de frecuencia C e I.<br>
                    Cabe señalar que la palabra MATEMÁTICA, debe aparecer al final del mensaje.<br><br>


                    {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@store_rel_sim_3']) !!}

                        <strong>Mensaje:</strong><br>
                        {!! Form::text('a', null, ['class'=>'form-control'])!!}<br>


                         {!! Form::submit('Guardar', ['class'=>'form-control btn btn-primary']) !!}

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <strong><p style="text-align: center;">SIMBOLIZACIÓN</p></strong><br>

                    Resulta de importancia capital cuando se trata de resolver problemas, pues permite
                    al estudiante plantear modelos simbólicos de situaciones reales. El planteo de
                    ecuaciones para resolver problemas, es un ejemplo muy significativo.
                    INSTRUCCIONES: Resuelve en forma individual el siguiente ejercicio.<br><br>

                    <strong>INSTRUCCIONES:</strong> Lea cuidadosamente las indicaciones que se dan en cada caso y
                    responda a lo que se le pide.<br><br>

                    1. Actuando como detectives, te pedimos descifrar el siguiente mensaje en clave:<br><br>

                    <div style="margin-left: 19%">
                        <img width="500" height=300" src="images/14_Relacion_y_simbolizacion/simb1.png">
                    </div><br><br>

                    <strong>Pista:</strong><br><br>
                    Se sabe que en el mensaje las letras que se repiten con más frecuencia son A, E, y
                    D, en ese orden; aparece la P; le siguen también en ese orden de frecuencia C e I.<br>
                    Cabe señalar que la palabra MATEMÁTICA, debe aparecer al final del mensaje.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@edit_rel_sim_3']) !!}

                    <strong>Mensaje:</strong><br>
                    {!! Form::text('a_e', $f_decode1, ['class'=>'form-control'])!!}<br>


                    {!! Form::submit('Edit', ['class'=>'form-control btn btn-primary']) !!}

                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

    <div class="center-block" style="margin-left:20%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/rel_sim_2')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/rel_sim_1')}}">Ejercicio 1</a></li>
                <li><a href="{{url('/rel_sim_2')}}">Ejercicio 2</a></li>
                <li><a href="{{url('/rel_sim_3')}}" style="background-color: lightgray;">Ejercicio 3</a></li>
                <li><a href="{{url('/rel_sim_4')}}">Ejercicio 4</a></li>
                <li><a href="{{url('/rel_sim_5')}}">Ejercicio 5</a></li>
                <li>
                    <a href="{{url('/rel_sim_4')}}" aria-label="Next">
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
