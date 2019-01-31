@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">COMPRENSIÓN DE LECTURA</p></strong><br>

                <strong>INSTRUCCIONES:</strong> Leer el texto y conteste las preguntas. Los términos que utilice
                para contestar pueden variar, pero no la esencia de la respuesta.<br><br>

                <strong>LECTURA</strong><br><br>

                <strong>Respuesta abierta</strong><br><br>

                <strong>INSTRUCCIONES:</strong><br><br>

                @if($edit==0)


                {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@store_pens_2']) !!}

                    @if($f1_decode != NULL && $f2_decode != NULL && $f3_decode != NULL && $f4_decode != NULL && $f5_decode != NULL)


                    <div class="form-group">
                             <p>1. El concepto jurídico actual de persona, mantiene una relación estrecha con la
                                 percepción que ya tenían los griegos y romanos; explique dicha relación.</p>
                            {!! Form::label('text1', $f1_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>2.En el mundo náhuatl, los sabios pretendían “hacer sabios los rostros y firmes
                            los corazones”, explique qué entiendes con esa frase.</p>
                        {!! Form::label('text2', $f2_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>3. ¿Cuáles eran los elementos que caracterizaban al ser humano en la civilización
                            náhuatl?</p>
                        {!! Form::label('text3', $f3_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>4.¿Por qué era importante, para los nahuas, incluir el concepto corazón en la
                            definición de persona?</p>
                        {!! Form::label('text4', $f4_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>5.¿Qué pretendían las antiguas civilizaciones al implementar un modelo
                            educativo obligatorio y universal?</p>
                        {!! Form::label('text5', $f5_decode, ['class'=>'form-control']) !!}
                    </div>

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

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorPensamientosController@edit_pens_2']) !!}

                    @if($f1_decode != NULL && $f2_decode != NULL && $f3_decode != NULL && $f4_decode != NULL && $f5_decode != NULL)

                    <div class="form-group">
                        <p>1. El concepto jurídico actual de persona, mantiene una relación estrecha con la
                            percepción que ya tenían los griegos y romanos; explique dicha relación.</p>
                        {!! Form::label('text1', $f1_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>2.En el mundo náhuatl, los sabios pretendían “hacer sabios los rostros y firmes
                            los corazones”, explique qué entiendes con esa frase.</p>
                        {!! Form::label('text2', $f2_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>3. ¿Cuáles eran los elementos que caracterizaban al ser humano en la civilización
                            náhuatl?</p>
                        {!! Form::label('text3', $f3_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>4.¿Por qué era importante, para los nahuas, incluir el concepto corazón en la
                            definición de persona?</p>
                        {!! Form::label('text4', $f4_decode, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <p>5.¿Qué pretendían las antiguas civilizaciones al implementar un modelo
                            educativo obligatorio y universal?</p>
                        {!! Form::label('text5', $f5_decode, ['class'=>'form-control']) !!}
                    </div>

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
