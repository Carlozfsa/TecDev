@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Habilidades de Estudio</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio 1
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">



                <script type="text/javascript">
                    $('#info_1').hide();
                </script>

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/hab_est_1')}}">
                    {{csrf_field()}}

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
                                        <tr>
                                            <td ><input type="text" name="h1[]" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add1" id="add1" class="btn btn-success center-block">Agregar</button></td>
                                        </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h2[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h3[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add3" id="add3" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h4[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add4" id="add4" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h5[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add5" id="add5" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h6[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add6" id="add6" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h7[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add7" id="add7" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h8[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add8" id="add8" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
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
                                    <tr>
                                        <td ><input type="text" name="h9[]" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add9" id="add9" class="btn btn-success center-block">Agregar</button></td>
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
