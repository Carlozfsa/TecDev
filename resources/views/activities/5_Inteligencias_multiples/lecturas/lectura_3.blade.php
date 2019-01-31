@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">Sugerencias para mejorar la Inteligencia</p></strong><br>

                <p>
                    El entrenamiento que te proponemos a continuación descansa en su mayor parte en
                    la resolución de problemas. Esto se debe a que es justamente ante la aparición del
                    inconveniente, de lo raro o lo incomprensible, que la situación exige una conducta
                    inteligente.<br>
                </p>

                <p>
                    <strong>2. Aptitud Espacial:</strong><br>
                    Estos ejercicios implican un adecuado manejo de
                    las formas, de los trazos de los objetos, desarrollando sobre todo el
                    poder de observación<br>
                </p>

                <p>
                    <strong>- DESARROLLANDO EL PODER DE OBSERVACIÓN</strong><br>
                    ¿Cuántos Cuadrados Puedes Contar en la Siguiente Figura?<br>
                </p>

                <div style="margin-left: 30%">
                    <img width="300" height=300" src="images/5_Inteligencias_multiples/cuadros.png">
                </div><br><br>


                <p div style="margin-left: 20%">R= ________________________________________________________________</p><br><br>

                <p>
                    Si contaste 16, estás en un grupo numeroso. Si constaste 17, estás en un grupo más
                    selecto, pero todavía equivocado. Antes de seguir, ¿por qué no miras y tratas de
                    encontrar más cuadros?
                </p>

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:20%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
            <li>
                <a href="{{url('/int_mult_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/int_mult_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/int_mult_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/int_mult_l_3')}}"style="background-color: lightgray;">Lectura 3</a></li>
            <li><a href="{{url('/int_mult_ej_1')}}"><strong>Primer ejercicio</strong></a></li>
            <li>
                <a href="{{url('/int_mult_ej_1')}}" aria-label="Next">
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
