@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Resumen y Ensayo</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                    <strong><p style="text-align: center;"> Actividad a realizar:</p></strong><br>

                    Determina uno de los 2 procedimientos expuestos en la sesión (resumen y
                    ensayo académico), hacer la investigación necesaria para desarrollar el tema:<br>

                    “El impacto de mi estudio de educación superior, en el desarrollo científico y
                    tecnológico de México". <br><br>

                {!! Form::open(['method'=>'POST', 'action'=>'EnsayosController@store_ens_1']) !!}
                {!! Form::textarea('ens', null,  ['class'=>'form-control']) !!}<br>
                {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}
                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br><br>

                    <strong><p style="text-align: center;"> Actividad a realizar:</p></strong><br>

                    Determina uno de los 2 procedimientos expuestos en la sesión (resumen y
                    ensayo académico), hacer la investigación necesaria para desarrollar el tema:<br>

                    “El impacto de mi estudio de educación superior, en el desarrollo científico y
                    tecnológico de México". <br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'EnsayosController@edit_ens_1']) !!}
                    {!! Form::textarea('ens_e', $f_decode1,  ['class'=>'form-control']) !!}<br>
                    {!! Form::submit('Editar', ['class'=>'btn-primary form-control']) !!}
                    {!! Form::close() !!}

                @endif


            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:25%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/ens_l_3')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/ens_l_3')}}">Lecturas</a></li>
            <li><a href="{{url('/ens_1')}}" style="background-color: lightgray;">Ejercicio 1</a></li>
            <li><a href="{{url('/mat_l_1')}}"><strong>Siguiente actividad</strong></a></li>
            <li>
                <a href="{{url('/mat_l_1')}}" aria-label="Next">
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
