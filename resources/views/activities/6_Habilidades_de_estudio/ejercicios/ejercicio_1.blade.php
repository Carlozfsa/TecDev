@extends('layouts.sideBarAlumno')

@section('content')

    <h2>DESARROLLO HUMANO INTEGRAL (DIMENSION COGNITIVA)</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio 1
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">



                <script type="text/javascript">
                    $('#info_1').hide();
                </script>

                <form name="autoevaluacion" id="add_fort">

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
                                    <table class="table table-bordered" id="dynamic_field">
                                        <tr>
                                            <td ><input type="text" name="name[]" class="form-control name_list center-block"></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
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
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
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
                                <table class="table table-bordered" id="dynamic_field2">
                                    <tr>
                                        <td ><input type="text" name="name[]2" class="form-control name_list center-block"></td>
                                        <td><button type="button" name="add2" id="add2" class="btn btn-success center-block">Agregar</button></td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>

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
        var i=1;
    $('#info_1').hide();

        $('#add').click(function(){

            if(i<=7){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
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

<script>
    $(document).ready(function(){
        var i=1;
        $('#info_1').hide();

        $('#add2').click(function(){

            if(i<=7){
                i++;
                $('#dynamic_field2').append('<tr id="row2'+i+'" class="dynamic-added"><td><input type="text" name="name2[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2 center-block">X</button></td></tr>');
            }else{
                $('#info_1').fadeIn();
            }

        });

        $(document).on('click', '.btn_remove2', function(){
            var button_id = $(this).attr("id");
            $('#row2'+button_id+'').fadeOut();
        });

    });

</script>
@stop
