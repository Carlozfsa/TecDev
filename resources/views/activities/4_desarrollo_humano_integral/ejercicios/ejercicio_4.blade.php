@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <div class="form-group">

                    @if($edit == 0)

                        <strong>Ejercicio</strong><br>

                        Encuentra el término que falta en las siguientes analogías. Especifica las relaciones
                        que se establecen Utiliza los pasos que vieron en clase.


                        {!! Form::open(['mathod'=>'POST', 'action'=>'DesarrolloHumanoController@store_des_hum_int_4']) !!}
                        {!! Form::label('lbl1.1','1. Gato es a ratón como caballo es a') !!}
                        {!! Form::text('txt1_1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl1.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt1_2', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl2.1','2. Barco es a tren como tiburón es a') !!}
                        {!! Form::text('txt2_1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl2.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt2_2', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl3.1','3. Amanecer es a felicidad como noche es a') !!}
                        {!! Form::text('txt3_1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl3.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt3_2', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl4.1','4. Volar es a libertad como arrastrarse es ') !!}
                        {!! Form::text('txt4_1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl4.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt4_2', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl5.1','5. Café es a galleta como hombre es a ') !!}
                        {!! Form::text('txt5_1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl5.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt5_2', null, ['class'=>'form-control']) !!}<br><br>

                    <div class="row" style="margin-left: 32%;">
                        {!! Form::submit('Guardar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                    </div>


                    {!! Form::close() !!}<br>


                    @else

                        <div class="alert alert-success">
                            <strong>Aviso!</strong><br>
                            Registro guardado. Es posible editar la actividad.<br>
                            Puede continuar con la siguiente parte.
                        </div>

                        <strong>Ejercicio</strong><br>

                        Encuentra el término que falta en las siguientes analogías. Especifica las relaciones
                        que se establecen Utiliza los pasos que vieron en clase.<br><br>

                        {!! Form::open(['mathod'=>'POST', 'action'=>'DesarrolloHumanoController@edit_des_hum_int_4']) !!}
                        {!! Form::label('lbl1.1','1. Gato es a ratón como caballo es a') !!}
                        {!! Form::text('txt1_1_e', $f_decode1, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl1.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt1_2_e', $f_decode2, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl2.1','2. Barco es a tren como tiburón es a') !!}
                        {!! Form::text('txt2_1_e', $f_decode3, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl2.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt2_2_e', $f_decode4, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl3.1','3. Amanecer es a felicidad como noche es a') !!}
                        {!! Form::text('txt3_1_e', $f_decode5, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl3.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt3_2_e', $f_decode6, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl4.1','4. Volar es a libertad como arrastrarse es ') !!}
                        {!! Form::text('txt4_1_e', $f_decode7, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl4.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt4_2_e', $f_decode8, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl5.1','5. Café es a galleta como hombre es a ') !!}
                        {!! Form::text('txt5_1_e', $f_decode9, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl5.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt5_2_e', $f_decode10, ['class'=>'form-control']) !!}<br><br>

                        <div class="row" style="margin-left: 32%;">
                            {!! Form::submit('Editar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                        </div>


                        {!! Form::close() !!}<br>

                    @endif





                </div>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_ej_3')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_ej_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/des_hum_int_ej_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/des_hum_int_ej_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/des_hum_int_ej_4')}}"style="background-color: lightgray;">Ejercicio 4</a></li>
            <li><a href="{{url('/des_hum_int_ej_5')}}">Ejercicio 5</a></li>
            <li><a href="{{url('/des_hum_int_ej_6')}}">Ejercicio 6</a></li>
            <li>
                <a href="{{url('/des_hum_int_ej_5')}}" aria-label="Next">
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
