@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Ejercicio II</strong><br><br>
                    Realiza una segunda tabla para el resumen semanal de actividades, como se
                    muestra en la siguiente imagen:<br>
                </div><br><br>

                <div style="margin-left: 19%">
                    <img width="500" height=400" src="images/2_administracion_del_tiempo/t2.png">
                </div><br><br>

            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:15%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">

                <li><a href="{{url('/tiempo_ej_2_1')}}" style="background-color: lightgray;">Parte 1</a></li>
                <li><a href="{{url('/tiempo_ej_2_2')}}">Parte 2</a></li>
                <li><a href="{{url('/tiempo_ej_2_3')}}">Parte 3</a></li>
                <li><a href="{{url('/tiempo_ej_2_4')}}">Parte 4</a></li>
                <li><a href="{{url('/tiempo_ej_2_5')}}">Parte 5</a></li>
                <li><a href="{{url('/tiempo_ej_2_6')}}">Parte 6</a></li>
                <li><a href="{{url('/tiempo_ej_2_7')}}">Parte 7</a></li>
                <li><a href="{{url('/tiempo_ej_2_8')}}">Parte 8</a></li>
                <li>
                    <a href="{{url('/tiempo_ej_2_2')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="o4[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });
    });
    </script>





@stop
