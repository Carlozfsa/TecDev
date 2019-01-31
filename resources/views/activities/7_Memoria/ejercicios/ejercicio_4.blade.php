@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">CASOS DE ESTUDIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <div class="form-group">

                    @if($edit==0)

                        <strong>INSTRUCCIONES:</strong> Elabore un escrito donde puntualice lo descubierto en su
                        dimensión física, inteligencia, hábitos de estudio, memoria, lectura, fortalezas y
                        debilidades para plasmarlo en un plan de mejora, apoyado de La línea de la vida y
                        el Análisis FODA.<br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'MemoriasController@store_mem_4']) !!}
                        {!! Form::textarea('escrito', null,  ['class'=>'form-control']) !!}<br>
                        {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}
                    {!! Form::close() !!}

                    @else

                        <strong>INSTRUCCIONES:</strong> Elabore un escrito donde puntualice lo descubierto en su
                        dimensión física, inteligencia, hábitos de estudio, memoria, lectura, fortalezas y
                        debilidades para plasmarlo en un plan de mejora, apoyado de La línea de la vida y
                        el Análisis FODA.<br><br>

                        <div class="alert alert-success">
                            <strong>Aviso!</strong><br>
                            Registro guardado. Es posible editar la actividad.<br>
                            Puede continuar con la siguiente parte.
                        </div><br><br>

                        {!! Form::open(['method'=>'POST', 'action'=>'MemoriasController@edit_mem_4']) !!}
                        {!! Form::textarea('escrito_e', $f_decode1,  ['class'=>'form-control']) !!}<br>
                        {!! Form::submit('Editar', ['class'=>'btn-primary form-control']) !!}
                        {!! Form::close() !!}

                    @endif

                </div>


        </div>
    </div>
    </div>

  <div class="center-block" style="margin-left:13%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mem_3')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mem_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/mem_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/mem_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/mem_4')}}" style="background-color: lightgray;">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_l_1')}}"><strong>Siguiente actividad</strong></a></li>
            <li>
                <a href="{{url('/pens_l_1')}}" aria-label="Next">
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
