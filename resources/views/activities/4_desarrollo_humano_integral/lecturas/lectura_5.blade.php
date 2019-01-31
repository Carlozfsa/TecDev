@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                El proceso de comparación permite establecer relaciones de semejanza o
                diferencia, bajo la base de algún criterio o variable, entre objetos, situaciones,
                hechos o personas. La importancia de cada parámetro está en función de las
                razones o necesidades que originan la comparación (Ríos, 2004). Se puede
                incentivar la relación en clase resolviendo analogías, analizando elementos faltantes
                de secuencias, estableciendo vínculos, explicando contenidos de premisas no
                explicitas.<br>
                La comparación es el proceso a través del cual se establecen relaciones y
                diferencias entre los elementos agrupados de un conjunto Campirán, A. (1999).
                Es el establecimiento de diferencias y semejanzas entre personas, objetos, eventos
                o situaciones, el establecimiento de semejanzas permite generalizar, el de
                diferencias el particularizar y como consecuencia de ambos comparar En la
                comparación el concepto de variable facilita el proceso, se trata de identificar y
                especificar, variable por variable, las características que hacen que los pares de
                personas, objetos, eventos o situaciones que se comparen, sean semejantes o
                diferentes entre sí.<br>

                <div style="margin-left: 23%">
                    <img width="400" height=300" src="images/4_desarrollo_humano_integral/props.png">
                </div><br>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:0%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/des_hum_int_l_4')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/des_hum_int_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/des_hum_int_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/des_hum_int_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/des_hum_int_l_4')}}">Lectura 4</a></li>
            <li><a href="{{url('/des_hum_int_l_5')}}"style="background-color: lightgray;">Lectura 5</a></li>
            <li><a href="{{url('/des_hum_int_l_6')}}">Lectura 6</a></li>
            <li><a href="{{url('/des_hum_int_l_7')}}">Lectura 7</a></li>
            <li><a href="{{url('/des_hum_int_l_8')}}">Lectura 8</a></li>
            <li><a href="{{url('/des_hum_int_l_9')}}">Lectura 9</a></li>
            <li><a href="{{url('/des_hum_int_l_10')}}">Lectura 10</a></li>
            <li><a href="{{url('/des_hum_int_l_11')}}">Lectura 11</a></li>
            <li><a href="{{url('/des_hum_int_l_12')}}">Lectura 12</a></li>
            <li><a href="{{url('/des_hum_int_l_13')}}">Lectura 13</a></li>
            <li><a href="{{url('/des_hum_int_l_14')}}">Lectura 14</a></li>
            <li>
                <a href="{{url('/des_hum_int_l_6')}}" aria-label="Next">
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
