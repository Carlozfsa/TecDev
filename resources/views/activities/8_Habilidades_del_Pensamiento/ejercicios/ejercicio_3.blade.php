@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                @if($edit==0)

                {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@store_pens_3']) !!}
                    <div class="form-group">
                             <p>1. El concepto jurídico actual de persona, mantiene una relación estrecha con la
                                 percepción que ya tenían los griegos y romanos; explique dicha relación.</p>
                            {!! Form::text('text1', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>2.En el mundo náhuatl, los sabios pretendían “hacer sabios los rostros y firmes
                            los corazones”, explique qué entiendes con esa frase.</p>
                        {!! Form::text('text2', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>3. ¿Cuáles eran los elementos que caracterizaban al ser humano en la civilización
                            náhuatl?</p>
                        {!! Form::text('text3', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>4.¿Por qué era importante, para los nahuas, incluir el concepto corazón en la
                            definición de persona?</p>
                        {!! Form::text('text4', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>5.¿Qué pretendían las antiguas civilizaciones al implementar un modelo
                            educativo obligatorio y universal?</p>
                        {!! Form::text('text5', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}
                    </div>

                {!! Form::close() !!}

               @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br><br>

                    <strong><p style="text-align: center;">COMPRENSIÓN DE LECTURA</p></strong><br>

                    <strong>INSTRUCCIONES:</strong> Leer el texto y conteste las preguntas. Los términos que utilice
                    para contestar pueden variar, pero no la esencia de la respuesta.<br><br>

                    <strong>LECTURA</strong><br><br>

                    <strong>Respuesta abierta</strong><br><br>

                    <strong>INSTRUCCIONES:</strong><br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'PensamientosController@edit_pens_3']) !!}
                    <div class="form-group">
                        <p>1. El concepto jurídico actual de persona, mantiene una relación estrecha con la
                            percepción que ya tenían los griegos y romanos; explique dicha relación.</p>
                        {!! Form::text('text1_e', $f_decode1, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>2.En el mundo náhuatl, los sabios pretendían “hacer sabios los rostros y firmes
                            los corazones”, explique qué entiendes con esa frase.</p>
                        {!! Form::text('text2_e', $f_decode2, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>3. ¿Cuáles eran los elementos que caracterizaban al ser humano en la civilización
                            náhuatl?</p>
                        {!! Form::text('text3_e', $f_decode3, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>4.¿Por qué era importante, para los nahuas, incluir el concepto corazón en la
                            definición de persona?</p>
                        {!! Form::text('text4_e', $f_decode4, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>5.¿Qué pretendían las antiguas civilizaciones al implementar un modelo
                            educativo obligatorio y universal?</p>
                        {!! Form::text('text5_e', $f_decode5, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Editar', ['class'=>'btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif

            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:17%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/pens_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/pens_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/pens_3')}}" style="background-color: lightgray;">Ejercicio 3</a></li>
            <li><a href="{{url('/pens_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/pens_5')}}">Ejercicio 5</a></li>
            <li>
                <a href="{{url('/pens_4')}}" aria-label="Next">
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
