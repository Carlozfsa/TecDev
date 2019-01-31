@extends('layouts.sideBarAlumno')

@section('content')

    <h2>DESARROLLO HUMANO INTEGRAL (DIMENSION COGNITIVA)</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading"><strong>Ejercicio 1</strong><br>
            Selecciona el número de la sigura correspondiente e indica si la diferencia es de orientacion, tamaño, color o posicion
        </div>
        <div class="panel-body">

            @if($edit==0)


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

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorDesarrolloHumanoController@store_des_hum_int_1']) !!}

                @if($f1_decode!=NULL && $f2_decode!=NULL)


                <div class="col-sm-6">
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>Número de figura</strong></td>
                            </tr>
                            @foreach($f1_decode as $key=>$value)
                                <tr>
                                    <td >{{$value}}</td>
                                </tr>
                            @endforeach
                        </table>
                        </div>

                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <tr>
                            <td><strong>Número de figura</strong></td>
                        </tr>
                        @foreach($f2_decode as $key=>$value)
                            <tr>
                                <td >{{$value}}</td>
                            </tr>
                        @endforeach
                    </table>
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
                            <textarea rows="5" name ="retro1" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal1" class="form-control name_list center-block">
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

                    <div style="margin-left: 17%;">
                        <img width="500" height=360" src="images/4_desarrollo_humano_integral/e_1_7_dif.png">
                    </div>
                    <div id = "info_1" class="alert alert-danger" style="text-align: center">
                        Solamente hay 7 diferencias!
                    </div>

                    {!! Form::open(['method'=>'POST', 'action'=>'TutorDesarrolloHumanoController@edit_des_hum_int_1']) !!}

                    @if($f1_decode!=NULL && $f2_decode!=NULL)

                    <div class="col-sm-6">
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>Número de figura</strong></td>
                            </tr>
                            @foreach($f1_decode as $key=>$value)
                                <tr>
                                    <td >{{$value}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="col-sm-6">
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>Número de figura</strong></td>
                            </tr>
                            @foreach($f2_decode as $key=>$value)
                                <tr>
                                    <td >{{$value}}</td>
                                </tr>
                            @endforeach
                        </table>
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
