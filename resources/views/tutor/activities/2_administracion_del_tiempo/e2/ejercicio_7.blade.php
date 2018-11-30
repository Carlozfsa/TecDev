@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <h2>Actividades del Sabado</h2>

                <br><br>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_tiempo_ej_2_7')}}">
                    {{csrf_field()}}

                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th>Categoría</th>
                            <th>Actividades</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>Sueño</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field1">
                                        @foreach($f1_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Comida</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field2">
                                        @foreach($f2_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Clase</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field3">
                                        @foreach($f3_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Estudio</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field4">
                                        @foreach($f4_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades religiosas</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field5">
                                        @foreach($f5_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades sociales</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field6">
                                        @foreach($f6_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades deportivas</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field7">
                                        @foreach($f7_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Tiempo
                                perdido,
                                etc..</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field8">
                                        @foreach($f8_decode as $key=>$value)
                                            <tr>
                                                <td>{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>

                    </table>

                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal" class="form-control name_list center-block">
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

            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:13%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                <a href="{{url('/tiempo_ej_2_1')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li><a href="{{url('/tiempo_ej_2_1')}}">Parte 1</a></li>
                <li><a href="{{url('/tiempo_ej_2_2')}}" style="background-color: lightgray;">Parte 2</a></li>
                <li><a href="{{url('/tiempo_ej_2_3')}}">Parte 3</a></li>
                <li><a href="{{url('/tiempo_ej_2_4')}}">Parte 4</a></li>
                <li><a href="{{url('/tiempo_ej_2_5')}}">Parte 5</a></li>
                <li><a href="{{url('/tiempo_ej_2_6')}}">Parte 6</a></li>
                <li><a href="{{url('/tiempo_ej_2_7')}}">Parte 7</a></li>
                <li><a href="{{url('/tiempo_ej_2_8')}}">Parte 8</a></li>
                <li>
                    <a href="{{url('/tiempo_ej_2_3')}}" aria-label="Next">
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
                $('#dynamic_field1').append('<tr id="row1'+i1+'" class="dynamic-added"><td><input type="text" name="sueno1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i1+'" class="btn btn-danger btn_remove1 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove1', function(){
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
                $('#dynamic_field2').append('<tr id="row2'+i2+'" class="dynamic-added"><td><input type="text" name="comida1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i2+'" class="btn btn-danger btn_remove2 center-block">X</button></td></tr>');
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
                $('#dynamic_field3').append('<tr id="row3'+i3+'" class="dynamic-added"><td><input type="text" name="clase1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i3+'" class="btn btn-danger btn_remove3 center-block">X</button></td></tr>');
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
                $('#dynamic_field4').append('<tr id="row4'+i4+'" class="dynamic-added"><td><input type="text" name="estudio1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i4+'" class="btn btn-danger btn_remove4 center-block">X</button></td></tr>');
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
                $('#dynamic_field5').append('<tr id="row5'+i5+'" class="dynamic-added"><td><input type="text" name="rel1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i5+'" class="btn btn-danger btn_remove5 center-block">X</button></td></tr>');
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
                $('#dynamic_field6').append('<tr id="row6'+i6+'" class="dynamic-added"><td><input type="text" name="soc1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i6+'" class="btn btn-danger btn_remove6 center-block">X</button></td></tr>');
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
                $('#dynamic_field7').append('<tr id="row7'+i7+'" class="dynamic-added"><td><input type="text" name="dep1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i7+'" class="btn btn-danger btn_remove7 center-block">X</button></td></tr>');
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
                $('#dynamic_field8').append('<tr id="row8'+i8+'" class="dynamic-added"><td><input type="text" name="per1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i8+'" class="btn btn-danger btn_remove8 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove8', function(){
                var button_id = $(this).attr("id");
                $('#row8'+button_id+'').fadeOut();
            });

        });
    </script>

@stop
