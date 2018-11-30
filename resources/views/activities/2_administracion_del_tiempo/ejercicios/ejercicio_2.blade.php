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

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tiempo_ej_2')}}">
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
                                            <td ><input type="text" name="l1[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td ><input type="text" name="l2[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l3[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l4[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l5[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l6[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l7[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l8[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l9[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l10[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l11[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l13[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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
                                            <td><input type="text" name="l14[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
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

            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:8%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/tiempo_ej_1')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/tiempo_ej_1')}}">Parte 1</a></li>
                <li><a href="{{url('/tiempo_ej_2')}}" style="background-color: lightgray;">Parte 2</a></li>
                <li><a href="{{url('/tiempo_ej_3')}}">Parte 3</a></li>
                <li><a href="{{url('/tiempo_ej_4')}}">Parte 4</a></li>
                <li><a href="{{url('/tiempo_ej_5')}}">Parte 5</a></li>
                <li><a href="{{url('/tiempo_ej_6')}}">Parte 6</a></li>
                <li><a href="{{url('/tiempo_ej_7')}}">Parte 7</a></li>
                <li><a href="{{url('/tiempo_ej_8')}}">Parte 8</a></li>
                <li><a href="{{url('/tiempo_ej_f')}}">Parte final</a></li>
                <li>
                    <a href="{{url('/tiempo_ej_2')}}" aria-label="Next">
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
                $('#dynamic_field1').append('<tr id="row1'+i1+'" class="dynamic-added"><td><input type="text" name="l1[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i1+'" class="btn btn-danger btn_remove1 center-block">X</button></td></tr>');
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
                $('#dynamic_field2').append('<tr id="row2'+i2+'" class="dynamic-added"><td><input type="text" name="l2[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i2+'" class="btn btn-danger btn_remove2 center-block">X</button></td></tr>');
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
                $('#dynamic_field3').append('<tr id="row3'+i3+'" class="dynamic-added"><td><input type="text" name="l3[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i3+'" class="btn btn-danger btn_remove3 center-block">X</button></td></tr>');
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
                $('#dynamic_field4').append('<tr id="row4'+i4+'" class="dynamic-added"><td><input type="text" name="l4[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i4+'" class="btn btn-danger btn_remove4 center-block">X</button></td></tr>');
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
                $('#dynamic_field5').append('<tr id="row5'+i5+'" class="dynamic-added"><td><input type="text" name="l5[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i5+'" class="btn btn-danger btn_remove5 center-block">X</button></td></tr>');
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
                $('#dynamic_field6').append('<tr id="row6'+i6+'" class="dynamic-added"><td><input type="text" name="l6[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i6+'" class="btn btn-danger btn_remove6 center-block">X</button></td></tr>');
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
                $('#dynamic_field7').append('<tr id="row7'+i7+'" class="dynamic-added"><td><input type="text" name="l7[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i7+'" class="btn btn-danger btn_remove7 center-block">X</button></td></tr>');
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
                $('#dynamic_field8').append('<tr id="row8'+i8+'" class="dynamic-added"><td><input type="text" name="l8[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i8+'" class="btn btn-danger btn_remove8 center-block">X</button></td></tr>');
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
                $('#dynamic_field9').append('<tr id="row9'+i9+'" class="dynamic-added"><td><input type="text" name="l9[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i9+'" class="btn btn-danger btn_remove9 center-block">X</button></td></tr>');
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
                $('#dynamic_field10').append('<tr id="row10'+i10+'" class="dynamic-added"><td><input type="text" name="l10[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i10+'" class="btn btn-danger btn_remove10 center-block">X</button></td></tr>');
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
                $('#dynamic_field11').append('<tr id="row11'+i11+'" class="dynamic-added"><td><input type="text" name="l11[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i11+'" class="btn btn-danger btn_remove11 center-block">X</button></td></tr>');
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
                $('#dynamic_field13').append('<tr id="row13'+i13+'" class="dynamic-added"><td><input type="text" name="l13[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i13+'" class="btn btn-danger btn_remove13 center-block">X</button></td></tr>');
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
                $('#dynamic_field14').append('<tr id="row14'+i14+'" class="dynamic-added"><td><input type="text" name="l14[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i14+'" class="btn btn-danger btn_remove14 center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove14', function(){
                var button_id = $(this).attr("id");
                $('#row14'+button_id+'').fadeOut();
            });

        });
    </script>



@stop
