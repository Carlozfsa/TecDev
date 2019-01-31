@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Ejercicio</strong><br>

                Encuentra el término que falta en las siguientes analogías. Especifica las relaciones
                que se establecen Utiliza los pasos que vieron en clase.

                @if($edit==0)

                <div class="form-group">

                    {!! Form::open(['mathod'=>'POST', 'action'=>'TutorDesarrolloHumanoController@store_des_hum_int_4']) !!}

                    @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL && $f9_decode!=NULL && $f10_decode!=NULL)


                        {!! Form::label('lbl1.1','1. Gato es a ratón como caballo es a') !!}
                        {!! Form::label('', $f1_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl1.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f2_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl2.1','2. Barco es a tren como tiburón es a') !!}
                        {!! Form::label('', $f3_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl2.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f4_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl3.1','3. Amanecer es a felicidad como noche es a') !!}
                        {!! Form::label('', $f5_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl3.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f6_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl4.1','4. Volar es a libertad como arrastrarse es ') !!}
                        {!! Form::label('', $f7_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl4.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f8_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl5.1','5. Café es a galleta como hombre es a ') !!}
                        {!! Form::label('', $f9_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl5.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f10_decode, ['class'=>'form-control']) !!}<br><br>
                        <br>

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

                </div>

               @else

                    <div class="form-group">

                        {!! Form::open(['mathod'=>'POST', 'action'=>'TutorDesarrolloHumanoController@edit_des_hum_int_4']) !!}

                        @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL && $f9_decode!=NULL && $f10_decode!=NULL)

                        {!! Form::label('lbl1.1','1. Gato es a ratón como caballo es a') !!}
                        {!! Form::label('', $f1_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl1.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f2_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl2.1','2. Barco es a tren como tiburón es a') !!}
                        {!! Form::label('', $f3_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl2.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f4_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl3.1','3. Amanecer es a felicidad como noche es a') !!}
                        {!! Form::label('', $f5_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl3.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f6_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl4.1','4. Volar es a libertad como arrastrarse es ') !!}
                        {!! Form::label('', $f7_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl4.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f8_decode, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl5.1','5. Café es a galleta como hombre es a ') !!}
                        {!! Form::label('', $f9_decode, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl5.2','Relación(es) que se repite(n):') !!}
                        {!! Form::label('', $f10_decode, ['class'=>'form-control']) !!}<br><br>
                        <br>

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
