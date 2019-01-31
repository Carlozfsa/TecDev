@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ACTIVIDAD INTEGRADORA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)

                    <strong><p style="text-align: center;">ACTIVIDAD INTEGRADORA</p></strong><br>


                    <strong>INSTRUCCIONES:</strong> Elabore un escrito donde puntualice lo descubierto en la
                    aplicación de las herramientas de aprendizaje como mapas, esquemas, cuadros,
                    resumen y ensayo. Además, su plan de acción para mejorar sus capacidades y
                    habilidades de pensamiento.<br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@store_rel_sim_5']) !!}

                {!! Form::textarea('a', null,['class'=>'form-control']) !!}<br>


                {!! Form::submit('Guardar', ['class'=>'form-control btn btn-primary']) !!}
                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <strong><p style="text-align: center;">ACTIVIDAD INTEGRADORA</p></strong><br>


                    <strong>INSTRUCCIONES:</strong> Elabore un escrito donde puntualice lo descubierto en la
                    aplicación de las herramientas de aprendizaje como mapas, esquemas, cuadros,
                    resumen y ensayo. Además, su plan de acción para mejorar sus capacidades y
                    habilidades de pensamiento.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'RelacionsController@edit_rel_sim_5']) !!}

                    {!! Form::textarea('a_e', $f_decode1,['class'=>'form-control']) !!}<br>


                    {!! Form::submit('Edit', ['class'=>'form-control btn btn-primary']) !!}
                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

    <div class="center-block" style="margin-left:13%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/rel_sim_4')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/rel_sim_1')}}">Ejercicio 1</a></li>
                <li><a href="{{url('/rel_sim_2')}}">Ejercicio 2</a></li>
                <li><a href="{{url('/rel_sim_3')}}">Ejercicio 3</a></li>
                <li><a href="{{url('/rel_sim_4')}}">Ejercicio 4</a></li>
                <li><a href="{{url('/rel_sim_5')}}" style="background-color: lightgray;">Ejercicio 5</a></li>
                <li><a href="{{url('/home')}}"><strong>Panel de alumno</strong></a></li>
                <li>
                    <a href="{{url('/home')}}" aria-label="Next">
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
