@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Ejercicio I</strong><br><br>
                    Uno de los primeros pasos para mejorar la habilidad de administrar el tiempo es
                    realizando un análisis de cómo se ha estado utilizando hasta este momento el
                    tiempo.<br>
                    Elabora una tabla para registrar por hora las actividades que realizas diariamente,
                    como se muestra en la figura.<br>
                </div><br><br>


                <button id="add_activity">Add</button>

                <table class="table table-bordered">
                    <thead >
                        <tr>
                            <th>Categoría</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sabado</th>
                            <th>Domingo</th>
                            <th>TOTAL DE HORAS</th>
                        </tr>
                    </thead>

                    <tr>
                        <td rowspan="2">
                            1:00 AM<br>
                            2:00 AM
                        </td>
                        <td id="a1" style="cursor: pointer;"></td>
                        <td id="a2" style="cursor: pointer;"></td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    <tr>

                    </tr>

                    <tr>
                        <td rowspan="2">
                            3:00 AM<br>
                            4:00 AM
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    </tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    <tr>

                    <tr>
                        <td rowspan="2">
                            5:00 AM<br>
                            6:00 AM
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    </tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    <tr>

                    <tr>
                        <td rowspan="2">
                            7:00 AM<br>
                            8:00 AM
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    </tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    <tr>

                    <tr>
                        <td rowspan="2">
                            9:00 AM<br>
                            10:00 AM
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>
                            13:00 AM
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>
                            14:00 AM
                        </td><td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>


                </table>


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

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });
</script>

<script>

    $(document).ready(function(){
        var i = 0;


        $('#a1').on('click', function(){

            $('td').css({'border':'1px gray solid'});
            $('td').removeAttr('button');
            $(this).css({'border': '3px solid red'});

            if(i<1){

                $(this).append('<form class="form-group"id="btn_1"><input class="col-sm-5" type="text"></input><button>Add</button></form>');
                i++;
            }
        });

        $('#a2').on('click', function(){
            i=0;
            $('#btn_1', '').remove();
            $('td').css({'border':'none'});
            $(this).css({'border': '3px solid red'});

        });


    });

</script>



@stop
