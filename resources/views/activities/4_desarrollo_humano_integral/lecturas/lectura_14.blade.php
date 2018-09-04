@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Relaciones analógicas incompletas</strong><br><br>

                Descubrir las analogías implícitas en nuestro lenguaje, ayuda a mejorar nuestra
                interpretación de la realidad y en general la inteligencia. Observa el siguiente
                ejemplo: "Hay quienes dicen que el amor es como una enfermedad". En esta frase
                hay una analogía escondida: "El amor es como una enfermedad<br><br>

                Analogía:<br>
                Enfermedad es a cuerpo, como amor es a alma<br>
                Una analogía, como ya lo estudiaste, es una Relación que se repite. Las relaciones
                que hay entre enfermedad y cuerpo son:<br>
                La enfermedad daña al cuerpo (A daña a B).<br>
                La enfermedad viene a nosotros sin que lo queramos.<br>
                (A viene a B sin la voluntad de B).<br>
                Las enfermedades leves desaparecen pero las grandes pueden matarnos.<br>
                (Las A leves desaparecen, pero las grandes pueden matar a B).<br>
                La enfermedad es algo que no es natural al cuerpo, rompe el equilibrio del cuerpo.<br>
                (A no es natural a B, rompe el equilibrio de B).<br>
                La enfermedad requiere de medicamento para quitarse.<br>
                (A requiere de algo para que se quite).<br><br>


                <strong>Estas relaciones probablemente se puedan repetir para una pareja de palabras:</strong><br>
                Amor-Alma.<br>
                ¿Cuál o cuáles a tu juicio se repiten en esta Relación?<br>
                Discute con tus compañeros los resultados. Descubrir las analogías implícitas en el
                lenguaje ayuda a mejorar nuestras interpretaciones de la realidad y en general
                desarrolla nuestra inteligencia.

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
@stop
