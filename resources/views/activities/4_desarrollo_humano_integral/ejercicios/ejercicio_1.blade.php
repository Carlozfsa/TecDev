@extends('layouts.sideBarAlumno')

@section('content')

    <h2>DESARROLLO HUMANO INTEGRAL (DIMENSION COGNITIVA)</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading"><strong>Ejercicio 1</strong><br>
            Selecciona el número de la sigura correspondiente e indica si la diferencia es de orientacion, tamaño, color o posicion
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


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
                            <td>{!! Form::select('f1',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d1',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f2',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d2',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f3',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d3',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f4',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d4',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f5',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d5',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f6',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d6',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('f7',['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', '11'=>'11', '12'=>'12','13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20', '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28'], null, ['class'=>'form-control']) !!}</td>
                            <td>{!! Form::select('d7',['1'=>'orientacion','2'=>'tamaño', '3'=>'color ','4'=>'posicion'], null, ['class'=>'form-control']) !!}</td>
                        </tr>

                    </table>

                    </div>

                <div class="row" style="margin-left: 32%;">
                    {!! Form::submit('Guardar',['class'=>'btn btn-primary form-group col-sm-5']) !!}
                </div>

                {!! Form::close() !!}

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
