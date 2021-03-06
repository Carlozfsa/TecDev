@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Construcción de analogías</strong><br>

                Recuerda que una analogía es una relación que se repite en contextos diferentes.<br>
                Para hacerla o analizarla es necesario:<br>
                1. Caracterizar y definir cada término.<br>
                2. Establecer relaciones entre el primer par de palabras utilizando las descripciones
                hechas.<br>
                3. Ver cuales se puede transferir y cuáles no al segundo par de palabras. Existen
                analogías en sentido vertical o bien horizontal. Si las analogías son bidireccionales
                encontrarás relaciones en ambos sentidos.<br><br>

                <strong>EJERCÍTATE</strong><br>

                Escribe el término que falta y la relación que se repite. Puede haber más de una
                respuesta en cada ejercicio, siempre y cuando las justifiques.

                @if($edit==0)

                <div class="form-group">

                    {!! Form::open(['mathod'=>'POST', 'action'=>'TutorDesarrolloHumanoController@store_des_hum_int_3']) !!}

                    @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL)

                        {!! Form::label('Rel1','1. Vampiro es a sangre como') !!}
                        {!! Form::label('rel1', $f1_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('Rel1','es a gusano') !!}<br>
                        {!! Form::label('Rel1','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel1_2', $f2_decode, ['class'=>'form-control']) !!}<br><br>


                        {!! Form::label('Rel2','2. Tierra es a semilla como pensamiento es a') !!}
                        {!! Form::label('rel2', $f3_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('Rel2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel2_2', $f4_decode, ['class'=>'form-control']) !!}<br><br>

                        Realicemos ahora un ejemplo más complejo en donde se ven una gran variedad de
                        posibles relaciones Y analogías.<br><br>
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
                                <textarea rows="5" name ="retro3" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal3" class="form-control name_list center-block">
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
                </div>

                 @else

                    <div class="form-group">

                        {!! Form::open(['mathod'=>'POST', 'action'=>'TutorDesarrolloHumanoController@edit_des_hum_int_3']) !!}

                        @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL)

                        {!! Form::label('Rel1','1. Vampiro es a sangre como') !!}
                        {!! Form::label('rel1', $f1_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('Rel1','es a gusano') !!}<br>
                        {!! Form::label('Rel1','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel1_2', $f2_decode, ['class'=>'form-control']) !!}<br><br>


                        {!! Form::label('Rel2','2. Tierra es a semilla como pensamiento es a') !!}
                        {!! Form::label('rel2', $f3_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('Rel2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('rel2_2', $f4_decode, ['class'=>'form-control']) !!}<br><br>

                        Realicemos ahora un ejemplo más complejo en donde se ven una gran variedad de
                        posibles relaciones Y analogías.<br><br>


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
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Edit" />
                                </td>
                            </tr>
                        </table>


                        {!! Form::close() !!}
                    </div>

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
