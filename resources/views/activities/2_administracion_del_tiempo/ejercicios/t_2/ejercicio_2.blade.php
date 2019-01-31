@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <h2>Actividades del Lunes</h2>

                <br><br>

                @if($edit == 0)

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tiempo_ej_2_2')}}">
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
                                        <tr>
                                            <td ><input type="text" name="sueno1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add1" id="add1" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Comida</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field2">
                                        <tr>
                                            <td ><input type="text" name="comida1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Clase</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field3">
                                        <tr>
                                            <td><input type="text" name="clase1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add3" id="add3" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Estudio</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field4">
                                        <tr>
                                            <td><input type="text" name="estudio1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add4" id="add4" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades religiosas</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field5">
                                        <tr>
                                            <td><input type="text" name="rel1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add5" id="add5" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades sociales</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field6">
                                        <tr>
                                            <td><input type="text" name="soc1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add6" id="add6" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Actividades deportivas</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field7">
                                        <tr>
                                            <td><input type="text" name="dep1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add7" id="add7" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
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
                                        <tr>
                                            <td><input type="text" name="per1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add8" id="add8" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                    </table>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                    </div>

                </form>

                @else

                    <div class="alert alert-success">
                        <strong>Aviso!</strong><br>
                        Registro guardado. Es posible editar la actividad.<br>
                        Puede continuar con la siguiente parte.
                    </div><br>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tiempo_ej_2_2')}}">
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
                                        <table class="table table-bordered" id="dynamic_field_edit_1">
                                            @foreach($f_decode1 as $key=>$value)
                                                <tr id="row_e_1{{$key}}">
                                                    <td><input type="text" name="sueno1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_1" id="add_edit_1" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_1" id="{{$key}}" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_2">
                                            @foreach($f_decode2 as $key=>$value)
                                                <tr id="row_e_2{{$key}}">
                                                    <td><input type="text" name="comida1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_2" id="add_edit_2" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_2" id="{{$key}}" class="btn btn-danger btn_remove_edit_2 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_3">
                                            @foreach($f_decode3 as $key=>$value)
                                                <tr id="row_e_3{{$key}}">
                                                    <td><input type="text" name="clase1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_3" id="add_edit_3" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_3" id="{{$key}}" class="btn btn-danger btn_remove_edit_3 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_4">
                                            @foreach($f_decode4 as $key=>$value)
                                                <tr id="row_e_4{{$key}}">
                                                    <td><input type="text" name="estudio1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_4" id="add_edit_4" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_4" id="{{$key}}" class="btn btn-danger btn_remove_edit_4 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_5">
                                            @foreach($f_decode5 as $key=>$value)
                                                <tr id="row_e_5{{$key}}">
                                                    <td><input type="text" name="rel1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_5" id="add_edit_5" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_5" id="{{$key}}" class="btn btn-danger btn_remove_edit_5 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_6">
                                            @foreach($f_decode6 as $key=>$value)
                                                <tr id="row_e_6{{$key}}">
                                                    <td><input type="text" name="soc1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_6" id="add_edit_6" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_6" id="{{$key}}" class="btn btn-danger btn_remove_edit_6 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_7">
                                            @foreach($f_decode7 as $key=>$value)
                                                <tr id="row_e_7{{$key}}">
                                                    <td><input type="text" name="dep1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_7" id="add_edit_7" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_7" id="{{$key}}" class="btn btn-danger btn_remove_edit_7 center-block">X</button></td> @endif
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
                                        <table class="table table-bordered" id="dynamic_field_edit_8">
                                            @foreach($f_decode8 as $key=>$value)
                                                <tr id="row_e_8{{$key}}">
                                                    <td><input type="text" name="per1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_8" id="add_edit_8" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_8" id="{{$key}}" class="btn btn-danger btn_remove_edit_8 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                        </table>

                        <div class="row" style="margin-left: 22%;">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                        </div>

                    </form>


                @endif

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


    {{--PARA EDITAR--}}


    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_1').length;

            $('#add_edit_1').click(function(){
                i++;
                $('#dynamic_field_edit_1').append('<tr id="row_e_1'+i+'" class="dynamic-added"><td><input type="text" name="sueno1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_1" id="'+i+'" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_1', function(){
                var button_id = $(this).attr("id");
                $('#row_e_1'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_2').length;

            $('#add_edit_2').click(function(){
                i++;
                $('#dynamic_field_edit_2').append('<tr id="row_e_2'+i+'" class="dynamic-added"><td><input type="text" name="comida1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_2" id="'+i+'" class="btn btn-danger btn_remove_edit_2 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_2', function(){
                var button_id = $(this).attr("id");
                $('#row_e_2'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_3').length;

            $('#add_edit_3').click(function(){
                i++;
                $('#dynamic_field_edit_3').append('<tr id="row_e_3'+i+'" class="dynamic-added"><td><input type="text" name="clase1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_3" id="'+i+'" class="btn btn-danger btn_remove_edit_3 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_3', function(){
                var button_id = $(this).attr("id");
                $('#row_e_3'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_4').length;

            $('#add_edit_4').click(function(){
                i++;
                $('#dynamic_field_edit_4').append('<tr id="row_e_4'+i+'" class="dynamic-added"><td><input type="text" name="estudio1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_4" id="'+i+'" class="btn btn-danger btn_remove_edit_4 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_4', function(){
                var button_id = $(this).attr("id");
                $('#row_e_4'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_5').length;

            $('#add_edit_5').click(function(){
                i++;
                $('#dynamic_field_edit_5').append('<tr id="row_e_5'+i+'" class="dynamic-added"><td><input type="text" name="rel1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_5" id="'+i+'" class="btn btn-danger btn_remove_edit_5 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_5', function(){
                var button_id = $(this).attr("id");
                $('#row_e_5'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_6').length;

            $('#add_edit_6').click(function(){
                i++;
                $('#dynamic_field_edit_6').append('<tr id="row_e_6'+i+'" class="dynamic-added"><td><input type="text" name="soc1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_6" id="'+i+'" class="btn btn-danger btn_remove_edit_6 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_6', function(){
                var button_id = $(this).attr("id");
                $('#row_e_6'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_7').length;

            $('#add_edit_7').click(function(){
                i++;
                $('#dynamic_field_edit_7').append('<tr id="row_e_7'+i+'" class="dynamic-added"><td><input type="text" name="dep1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_7" id="'+i+'" class="btn btn-danger btn_remove_edit_7 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_7', function(){
                var button_id = $(this).attr("id");
                $('#row_e_7'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_8').length;

            $('#add_edit_8').click(function(){
                i++;
                $('#dynamic_field_edit_8').append('<tr id="row_e_8'+i+'" class="dynamic-added"><td><input type="text" name="per1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_8" id="'+i+'" class="btn btn-danger btn_remove_edit_8 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_8', function(){
                var button_id = $(this).attr("id");
                $('#row_e_8'+button_id+'').remove();
            });

        });
    </script>




@stop
