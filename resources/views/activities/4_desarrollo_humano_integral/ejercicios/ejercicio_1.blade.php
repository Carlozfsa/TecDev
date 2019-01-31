@extends('layouts.sideBarAlumno')

@section('content')

    <h2>DESARROLLO HUMANO INTEGRAL (DIMENSION COGNITIVA)</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading"><strong>Ejercicio 1</strong><br>
            Selecciona el número de la sigura correspondiente e indica si la diferencia es de Orientación, Tamaño, Color o Posicion
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit == 0)

                    <div style="margin-left: 17%;">
                        <img width="500" height=360" src="images/4_desarrollo_humano_integral/e_1_7_dif.png">
                    </div>
                    <div id = "info_1" class="alert alert-danger" style="text-align: center">
                        Solamente hay 7 diferencias!
                    </div>


                    <script type="text/javascript">
                        $('#info_1').hide();
                    </script>

                    <br><br>
                    <strong style="text-align: center">Escribe aquí las 7 diferencias que encontraste:</strong><br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'DesarrolloHumanoController@store_des_hum_int_1']) !!}

                    <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                            <th>Numero de figura</th>
                            <th>Tipo de diferencia</th>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f1',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d1',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f2',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d2',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f3',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d3',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f4',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d4',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f5',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d5',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f6',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d6',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f7',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d7',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], null, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                        </tr>

                    </table>

                    </div>

                <div class="row" style="margin-left: 32%;">
                    {!! Form::submit('Guardar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                </div>

                {!! Form::close() !!}

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div>

                    <div style="margin-left: 17%;">
                        <img width="500" height=360" src="images/4_desarrollo_humano_integral/e_1_7_dif.png">
                    </div>
                    <div id = "info_1" class="alert alert-danger" style="text-align: center">
                        Solamente hay 7 diferencias!
                    </div>


                    <script type="text/javascript">
                        $('#info_1').hide();
                    </script>

                    <br><br>
                    <strong style="text-align: center">Escribe aquí las 7 diferencias que encontraste:</strong><br><br>

                    {!! Form::open(['method'=>'POST', 'action'=>'DesarrolloHumanoController@edit_des_hum_int_1']) !!}

                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <tr>
                                <th>Numero de figura</th>
                                <th>Tipo de diferencia</th>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f1_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n1, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d1_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o1, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f2_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n2, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d2_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o2, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f3_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n3, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d3_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o3, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f4_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n4, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d4_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o4, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f5_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n5, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d5_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o5, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f6_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n6, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d6_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o6, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::select('f7_e',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], $n7, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                                <td>{!! Form::select('d7_e',['1'=>'Orientación','2'=>'Tamaño', '3'=>'Color ','4'=>'Posicion'], $o7, ['style'=>'font-size: 15px;padding: 1px;','class'=>'form-control']) !!}</td>
                            </tr>

                        </table>

                    </div>

                    <div class="row" style="margin-left: 32%;">
                        {!! Form::submit('Editar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                    </div>

                    {!! Form::close() !!}

                @endif

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">

            <li><a href="{{url('/des_hum_int_ej_1')}}"style="background-color: lightgray;">Ejercicio 1</a></li>
            <li><a href="{{url('/des_hum_int_ej_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/des_hum_int_ej_3')}}">Ejercicio 3</a></li>
            <li><a href="{{url('/des_hum_int_ej_4')}}">Ejercicio 4</a></li>
            <li><a href="{{url('/des_hum_int_ej_5')}}">Ejercicio 5</a></li>
            <li><a href="{{url('/des_hum_int_ej_6')}}">Ejercicio 6</a></li>
            <li>
                <a href="{{url('/des_hum_int_ej_2')}}" aria-label="Next">
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
    $('#info_1').hide();

        $('#add').click(function(){

            if(i<=6){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="dif[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
            }else{
                $('#info_1').fadeIn();
            }

        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
