@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Habilidades de Estudio</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio 1
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)


                <script type="text/javascript">
                    $('#info_1').hide();
                </script>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_hab_est_1')}}">
                    {{csrf_field()}}

                    @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL && $f9_decode!=NULL)


                    <table class="table table-bordered">
                    <thead>
                        <tr style="color: black; background-color: royalblue;">
                            <th>
                                <strong>AUTOEVALUACION</strong>
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            1.- Escribe los motivos principales por los cuales estas estudiando.
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field1">
                                        @foreach($f1_decode as $key=>$value)
                                            <tr>
                                                <td >{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.- ¿Cómo será Mi Vida dentro de 5 años si estudio o no estudio?
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field2">
                                    @foreach($f2_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.-Redacta una lista de factores que te sirvan para motivar tu estudio
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field3">
                                    @foreach($f3_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.-Describe tu estado de salud; ¿necesitas un reconocimiento médico?
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field4">
                                    @foreach($f4_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.-Describe como estaría construido para ti el lugar apropiado para estudiar,
                            analicen los puntos expuestos.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field5">
                                    @foreach($f5_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.-Redacta una lista de los factores que no te permiten estudiar con eficiencia y
                            escribe las soluciones prácticas según tus necesidades particulares.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field6">
                                    @foreach($f6_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.-Escribe una lista de las ventajas y desventajas de estudiar individualmente y de
                            estudiar en grupo.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field7">
                                    @foreach($f7_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8.-Redacta una sugerencia que convine el estudio individual con el estudio en grupo.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field8">
                                    @foreach($f8_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.-Escribe que factores te causen indecisión al momento de comenzar a estudiar e
                            indica cómo evitarlos
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field9">
                                    @foreach($f9_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>

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
                                <textarea rows="5" name ="retro1" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal1" class="form-control name_list center-block" val="{{$cal}}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                            </td>
                        </tr>
                    </table>

                </form>

                @else

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_hab_est_1')}}">
                        {{csrf_field()}}

                        @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL && $f9_decode!=NULL)

                        <table class="table table-bordered">
                            <thead>
                            <tr style="color: black; background-color: royalblue;">
                                <th>
                                    <strong>AUTOEVALUACION</strong>
                                </th>
                            </tr>
                            </thead>
                            <tr>
                                <td>
                                    1.- Escribe los motivos principales por los cuales estas estudiando.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field1">
                                            @foreach($f1_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2.- ¿Cómo será Mi Vida dentro de 5 años si estudio o no estudio?
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field2">
                                            @foreach($f2_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3.-Redacta una lista de factores que te sirvan para motivar tu estudio
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field3">
                                            @foreach($f3_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4.-Describe tu estado de salud; ¿necesitas un reconocimiento médico?
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field4">
                                            @foreach($f4_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5.-Describe como estaría construido para ti el lugar apropiado para estudiar,
                                    analicen los puntos expuestos.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field5">
                                            @foreach($f5_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6.-Redacta una lista de los factores que no te permiten estudiar con eficiencia y
                                    escribe las soluciones prácticas según tus necesidades particulares.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field6">
                                            @foreach($f6_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7.-Escribe una lista de las ventajas y desventajas de estudiar individualmente y de
                                    estudiar en grupo.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field7">
                                            @foreach($f7_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    8.-Redacta una sugerencia que convine el estudio individual con el estudio en grupo.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field8">
                                            @foreach($f8_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    9.-Escribe que factores te causen indecisión al momento de comenzar a estudiar e
                                    indica cómo evitarlos
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field9">
                                            @foreach($f9_decode as $key=>$value)
                                                <tr>
                                                    <td >{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>

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

                    </form>

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
            var i1=1;

            $('#add1').click(function(){
                i1++;
                $('#dynamic_field1').append('<tr id="row1'+i1+'" class="dynamic-added1"><td><input type="text" name="h1[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i1+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row1'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i2=1;

            $('#add2').click(function(){
                i2++;
                $('#dynamic_field2').append('<tr id="row2'+i2+'" class="dynamic-added2"><td><input type="text" name="h2[]" class="form-control name_list" /></td><td><button type="button" name="remove2" id="'+i2+'" class="btn btn-danger btn_remove2 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove2', function(){
                var button_id = $(this).attr("id");
                $('#row2'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i3=1;

            $('#add3').click(function(){
                i3++;
                $('#dynamic_field3').append('<tr id="row3'+i3+'" class="dynamic-added3"><td><input type="text" name="h3[]" class="form-control name_list" /></td><td><button type="button" name="remove3" id="'+i3+'" class="btn btn-danger btn_remove3 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove3', function(){
                var button_id = $(this).attr("id");
                $('#row3'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i4=1;

            $('#add4').click(function(){
                i4++;
                $('#dynamic_field4').append('<tr id="row4'+i4+'" class="dynamic-added4"><td><input type="text" name="h4[]" class="form-control name_list" /></td><td><button type="button" name="remove4" id="'+i4+'" class="btn btn-danger btn_remove4 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove4', function(){
                var button_id = $(this).attr("id");
                $('#row4'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i5=1;

            $('#add5').click(function(){
                i5++;
                $('#dynamic_field5').append('<tr id="row5'+i5+'" class="dynamic-added5"><td><input type="text" name="h5[]" class="form-control name_list" /></td><td><button type="button" name="remove5" id="'+i5+'" class="btn btn-danger btn_remove5 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove5', function(){
                var button_id = $(this).attr("id");
                $('#row5'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i6=1;

            $('#add6').click(function(){
                i6++;
                $('#dynamic_field6').append('<tr id="row6'+i6+'" class="dynamic-added6"><td><input type="text" name="h6[]" class="form-control name_list" /></td><td><button type="button" name="remove6" id="'+i6+'" class="btn btn-danger btn_remove6 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove6', function(){
                var button_id = $(this).attr("id");
                $('#row6'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i7=1;

            $('#add7').click(function(){
                i7++;
                $('#dynamic_field7').append('<tr id="row7'+i7+'" class="dynamic-added7"><td><input type="text" name="h7[]" class="form-control name_list" /></td><td><button type="button" name="remove7" id="'+i7+'" class="btn btn-danger btn_remove7 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove7', function(){
                var button_id = $(this).attr("id");
                $('#row7'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i8=1;

            $('#add8').click(function(){
                i8++;
                $('#dynamic_field8').append('<tr id="row8'+i8+'" class="dynamic-added8"><td><input type="text" name="h8[]" class="form-control name_list" /></td><td><button type="button" name="remove8" id="'+i8+'" class="btn btn-danger btn_remove8 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove8', function(){
                var button_id = $(this).attr("id");
                $('#row8'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i9=1;

            $('#add9').click(function(){
                i9++;
                $('#dynamic_field9').append('<tr id="row9'+i9+'" class="dynamic-added9"><td><input type="text" name="h9[]" class="form-control name_list" /></td><td><button type="button" name="remove9" id="'+i9+'" class="btn btn-danger btn_remove9 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove9', function(){
                var button_id = $(this).attr("id");
                $('#row9'+button_id+'').fadeOut();
            });

        });
    </script>


@stop
