@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <h2>Actividades del Viernes</h2>

                <br><br>

                @if($edit == 0)

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tiempo_ej_6')}}">
                    {{csrf_field()}}

                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th>Hora</th>
                            <th>Actividades</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>1:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field1">
                                        <tr>
                                            <td ><input type="text" name="v1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add1" id="add1" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field2">
                                        <tr>
                                            <td ><input type="text" name="v2[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>3:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field3">
                                        <tr>
                                            <td><input type="text" name="v3[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add3" id="add3" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field4">
                                        <tr>
                                            <td><input type="text" name="v4[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add4" id="add4" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>5:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field5">
                                        <tr>
                                            <td><input type="text" name="v5[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add5" id="add5" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>6:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field6">
                                        <tr>
                                            <td><input type="text" name="v6[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add6" id="add6" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>7:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field7">
                                        <tr>
                                            <td><input type="text" name="v7[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add7" id="add7" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>8:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field8">
                                        <tr>
                                            <td><input type="text" name="v8[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add8" id="add8" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>9:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field9">
                                        <tr>
                                            <td><input type="text" name="v9[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add9" id="add9" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>10:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field10">
                                        <tr>
                                            <td><input type="text" name="v10[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add10" id="add10" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>11:00 AM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field11">
                                        <tr>
                                            <td><input type="text" name="v11[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add11" id="add11" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>13:00 PM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field13">
                                        <tr>
                                            <td><input type="text" name="v13[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add13" id="add13" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>14:00 PM</td>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field14">
                                        <tr>
                                            <td><input type="text" name="v14[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add14" id="add14" class="btn btn-success center-block">Agregar</button></td>
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

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tiempo_ej_6')}}">
                        {{csrf_field()}}

                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>Hora</th>
                                <th>Actividades</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>1:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_1">
                                            @foreach($f_decode1 as $key=>$value)
                                                <tr id="row_e_1{{$key}}">
                                                    <td ><input type="text" name="ve1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_1" id="add_edit_1" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_1" id="{{$key}}" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>2:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_2">
                                            @foreach($f_decode2 as $key=>$value)
                                                <tr id="row_e_2{{$key}}">
                                                    <td ><input type="text" name="ve2[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_2" id="add_edit_2" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_2" id="{{$key}}" class="btn btn-danger btn_remove_edit_2 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_3">
                                            @foreach($f_decode3 as $key=>$value)
                                                <tr id="row_e_3{{$key}}">
                                                    <td ><input type="text" name="ve3[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_3" id="add_edit_3" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_3" id="{{$key}}" class="btn btn-danger btn_remove_edit_3 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>4:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_4">
                                            @foreach($f_decode4 as $key=>$value)
                                                <tr id="row_e_4{{$key}}">
                                                    <td ><input type="text" name="ve4[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_4" id="add_edit_4" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_4" id="{{$key}}" class="btn btn-danger btn_remove_edit_4 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>5:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_5">
                                            @foreach($f_decode5 as $key=>$value)
                                                <tr id="row_e_5{{$key}}">
                                                    <td ><input type="text" name="ve5[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_5" id="add_edit_5" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_5" id="{{$key}}" class="btn btn-danger btn_remove_edit_5 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>6:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_6">
                                            @foreach($f_decode6 as $key=>$value)
                                                <tr id="row_e_6{{$key}}">
                                                    <td ><input type="text" name="ve6[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_6" id="add_edit_6" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_6" id="{{$key}}" class="btn btn-danger btn_remove_edit_6 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>7:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_7">
                                            @foreach($f_decode7 as $key=>$value)
                                                <tr id="row_e_7{{$key}}">
                                                    <td ><input type="text" name="ve7[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_7" id="add_edit_7" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_7" id="{{$key}}" class="btn btn-danger btn_remove_edit_7 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>8:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_8">
                                            @foreach($f_decode8 as $key=>$value)
                                                <tr id="row_e_8{{$key}}">
                                                    <td ><input type="text" name="ve8[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_8" id="add_edit_8" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_8" id="{{$key}}" class="btn btn-danger btn_remove_edit_8 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>9:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_9">
                                            @foreach($f_decode9 as $key=>$value)
                                                <tr id="row_e_9{{$key}}">
                                                    <td ><input type="text" name="ve9[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_9" id="add_edit_9" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_9" id="{{$key}}" class="btn btn-danger btn_remove_edit_9 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>10:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_10">
                                            @foreach($f_decode10 as $key=>$value)
                                                <tr id="row_e_10{{$key}}">
                                                    <td ><input type="text" name="ve10[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_10" id="add_edit_10" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_10" id="{{$key}}" class="btn btn-danger btn_remove_edit_10 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>11:00 AM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_11">
                                            @foreach($f_decode11 as $key=>$value)
                                                <tr id="row_e_11{{$key}}">
                                                    <td ><input type="text" name="ve11[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_11" id="add_edit_11" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_11" id="{{$key}}" class="btn btn-danger btn_remove_edit_11 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>13:00 PM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_12">
                                            @foreach($f_decode12 as $key=>$value)
                                                <tr id="row_e_12{{$key}}">
                                                    <td ><input type="text" name="ve12[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_12" id="add_edit_12" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_12" id="{{$key}}" class="btn btn-danger btn_remove_edit_12 center-block">X</button></td> @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>14:00 PM</td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field_edit_13">
                                            @foreach($f_decode13 as $key=>$value)
                                                <tr id="row_e_13{{$key}}">
                                                    <td ><input type="text" name="ve13[]" placeholder="Escriba su respuesta" class="form-control name_list center-block" value="{{$value}}"></td>
                                                    @if($key==1) <td><button type="button" name="add_edit_13" id="add_edit_13" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_13" id="{{$key}}" class="btn btn-danger btn_remove_edit_13 center-block">X</button></td> @endif
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

    <div class="center-block" style="margin-left:8%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/tiempo_ej_5')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/tiempo_ej_1')}}">Parte 1</a></li>
                <li><a href="{{url('/tiempo_ej_2')}}">Parte 2</a></li>
                <li><a href="{{url('/tiempo_ej_3')}}">Parte 3</a></li>
                <li><a href="{{url('/tiempo_ej_4')}}">Parte 4</a></li>
                <li><a href="{{url('/tiempo_ej_5')}}">Parte 5</a></li>
                <li><a href="{{url('/tiempo_ej_6')}}" style="background-color: lightgray;">Parte 6</a></li>
                <li><a href="{{url('/tiempo_ej_7')}}">Parte 7</a></li>
                <li><a href="{{url('/tiempo_ej_8')}}">Parte 8</a></li>
                <li>
                    <a href="{{url('/tiempo_ej_7')}}" aria-label="Next">
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
                $('#dynamic_field1').append('<tr id="row1'+i1+'" class="dynamic-added"><td><input type="text" name="v1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i1+'" class="btn btn-danger btn_remove1 center-block">X</button></td></tr>');
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
                $('#dynamic_field2').append('<tr id="row2'+i2+'" class="dynamic-added"><td><input type="text" name="v2[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i2+'" class="btn btn-danger btn_remove2 center-block">X</button></td></tr>');
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
                $('#dynamic_field3').append('<tr id="row3'+i3+'" class="dynamic-added"><td><input type="text" name="v3[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i3+'" class="btn btn-danger btn_remove3 center-block">X</button></td></tr>');
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
                $('#dynamic_field4').append('<tr id="row4'+i4+'" class="dynamic-added"><td><input type="text" name="v4[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i4+'" class="btn btn-danger btn_remove4 center-block">X</button></td></tr>');
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
                $('#dynamic_field5').append('<tr id="row5'+i5+'" class="dynamic-added"><td><input type="text" name="v5[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i5+'" class="btn btn-danger btn_remove5 center-block">X</button></td></tr>');
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
                $('#dynamic_field6').append('<tr id="row6'+i6+'" class="dynamic-added"><td><input type="text" name="v6[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i6+'" class="btn btn-danger btn_remove6 center-block">X</button></td></tr>');
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
                $('#dynamic_field7').append('<tr id="row7'+i7+'" class="dynamic-added"><td><input type="text" name="v7[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i7+'" class="btn btn-danger btn_remove7 center-block">X</button></td></tr>');
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
                $('#dynamic_field8').append('<tr id="row8'+i8+'" class="dynamic-added"><td><input type="text" name="v8[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i8+'" class="btn btn-danger btn_remove8 center-block">X</button></td></tr>');
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
                $('#dynamic_field9').append('<tr id="row9'+i9+'" class="dynamic-added"><td><input type="text" name="v9[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i9+'" class="btn btn-danger btn_remove9 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove9', function(){
                var button_id = $(this).attr("id");
                $('#row9'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i10=1;

            $('#add10').click(function(){
                i10++;
                $('#dynamic_field10').append('<tr id="row10'+i10+'" class="dynamic-added"><td><input type="text" name="v10[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i10+'" class="btn btn-danger btn_remove10 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove10', function(){
                var button_id = $(this).attr("id");
                $('#row10'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i11=1;

            $('#add11').click(function(){
                i11++;
                $('#dynamic_field11').append('<tr id="row11'+i11+'" class="dynamic-added"><td><input type="text" name="v11[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i11+'" class="btn btn-danger btn_remove11 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove11', function(){
                var button_id = $(this).attr("id");
                $('#row11'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i13=1;

            $('#add13').click(function(){
                i13++;
                $('#dynamic_field13').append('<tr id="row13'+i13+'" class="dynamic-added"><td><input type="text" name="v13[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i13+'" class="btn btn-danger btn_remove13 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove13', function(){
                var button_id = $(this).attr("id");
                $('#row13'+button_id+'').fadeOut();
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            var i14=1;

            $('#add14').click(function(){
                i14++;
                $('#dynamic_field14').append('<tr id="row14'+i14+'" class="dynamic-added"><td><input type="text" name="v14[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i14+'" class="btn btn-danger btn_remove14 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove14', function(){
                var button_id = $(this).attr("id");
                $('#row14'+button_id+'').fadeOut();
            });

        });
    </script>


    {{--PARA EDITAR--}}


    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_1').length;

            $('#add_edit_1').click(function(){
                i++;
                $('#dynamic_field_edit_1').append('<tr id="row_e_1'+i+'" class="dynamic-added"><td><input type="text" name="ve1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_1" id="'+i+'" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_2').append('<tr id="row_e_2'+i+'" class="dynamic-added"><td><input type="text" name="ve2[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_2" id="'+i+'" class="btn btn-danger btn_remove_edit_2 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_3').append('<tr id="row_e_3'+i+'" class="dynamic-added"><td><input type="text" name="ve3[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_3" id="'+i+'" class="btn btn-danger btn_remove_edit_3 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_4').append('<tr id="row_e_4'+i+'" class="dynamic-added"><td><input type="text" name="ve4[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_4" id="'+i+'" class="btn btn-danger btn_remove_edit_4 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_5').append('<tr id="row_e_5'+i+'" class="dynamic-added"><td><input type="text" name="ve5[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_5" id="'+i+'" class="btn btn-danger btn_remove_edit_5 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_6').append('<tr id="row_e_6'+i+'" class="dynamic-added"><td><input type="text" name="ve6[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_6" id="'+i+'" class="btn btn-danger btn_remove_edit_6 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_7').append('<tr id="row_e_7'+i+'" class="dynamic-added"><td><input type="text" name="ve7[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_7" id="'+i+'" class="btn btn-danger btn_remove_edit_7 center-block">X</button></td></tr>');
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
                $('#dynamic_field_edit_8').append('<tr id="row_e_8'+i+'" class="dynamic-added"><td><input type="text" name="ve8[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_8" id="'+i+'" class="btn btn-danger btn_remove_edit_8 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_8', function(){
                var button_id = $(this).attr("id");
                $('#row_e_8'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_9').length;

            $('#add_edit_9').click(function(){
                i++;
                $('#dynamic_field_edit_9').append('<tr id="row_e_9'+i+'" class="dynamic-added"><td><input type="text" name="ve9[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_9" id="'+i+'" class="btn btn-danger btn_remove_edit_9 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_9', function(){
                var button_id = $(this).attr("id");
                $('#row_e_9'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_10').length;

            $('#add_edit_10').click(function(){
                i++;
                $('#dynamic_field_edit_10').append('<tr id="row_e_10'+i+'" class="dynamic-added"><td><input type="text" name="ve10[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_10" id="'+i+'" class="btn btn-danger btn_remove_edit_10 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_10', function(){
                var button_id = $(this).attr("id");
                $('#row_e_10'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_11').length;

            $('#add_edit_11').click(function(){
                i++;
                $('#dynamic_field_edit_11').append('<tr id="row_e_11'+i+'" class="dynamic-added"><td><input type="text" name="ve11[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_11" id="'+i+'" class="btn btn-danger btn_remove_edit_11 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_11', function(){
                var button_id = $(this).attr("id");
                $('#row_e_11'+button_id+'').remove();
            });

        });
    </script>

    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_12').length;

            $('#add_edit_12').click(function(){
                i++;
                $('#dynamic_field_edit_12').append('<tr id="row_e_12'+i+'" class="dynamic-added"><td><input type="text" name="ve12[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_12" id="'+i+'" class="btn btn-danger btn_remove_edit_12 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_12', function(){
                var button_id = $(this).attr("id");
                $('#row_e_12'+button_id+'').remove();
            });

        });
    </script>


    <script>
        $(document).ready(function(){


            var i= $('#dynamic_field_edit_13').length;

            $('#add_edit_13').click(function(){
                i++;
                $('#dynamic_field_edit_13').append('<tr id="row_e_13'+i+'" class="dynamic-added"><td><input type="text" name="ve13[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_13" id="'+i+'" class="btn btn-danger btn_remove_edit_13 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove_edit_13', function(){
                var button_id = $(this).attr("id");
                $('#row_e_13'+button_id+'').remove();
            });

        });
    </script>



@stop
