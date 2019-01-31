@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">
                La administración del tiempo; es uno de
                los recursos más apreciados. Sin
                embargo, se trata de un bien que no se
                puede ahorrar, sino que pasa, no
                retrocede y es imposible de recuperar. Si
                se malgasta, se derrocha algo muy
                valioso.<br>
                La administración del tiempo se puede definir como una manera de ser y una
                forma de vivir. Hoy, se puede considerar al tiempo como uno de los recursos más
                importantes y críticos de los administradores.<br>
                Es revisar y analizar nuestros conceptos sobre la correcta aplicación del tiempo.
                "Administración del tiempo” significa administrarse uno mismo, de tal manera que se
                pueda optimizar el rendimiento del tiempo de que se dispone.<br>
                Para aprender a valorar el tiempo y a planificar el estudio, tanto a corto como a
                medio y largo plazo, es imprescindible:<br><br>
                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    1. Identificar metas, objetivos y prioridades.<br>
                    2. Conocer las prácticas habituales en cuanto a la organización y planificación
                    del tiempo.<br>
                    3. Conocer el ciclo vital del estudio y adaptar la planificación del tiempo.<br>
                    4. Seleccionar las estrategias más idóneas para alcanzar las metas, los
                    objetivos y las prioridades.<br>
                    5. Lograr habilidades suficientes en la administración del tiempo que sirvan tanto
                    en la vida académica como en la vida profesional<br>
                </div>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:23%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">

            <li><a href="{{url('/tiempo_l_1')}}" style="background-color: lightgray;">Lectura 1</a></li>
            <li><a href="{{url('/tiempo_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/tiempo_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/tiempo_l_4')}}">Lectura 4</a></li>
            <li>
                <a href="{{url('/tiempo_l_2')}}" aria-label="Next">
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
@stop
