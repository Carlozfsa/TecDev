@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ESQUEMA (CUADRO SINÓPTICO) Y CUADRO COMPARATIVO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">CUADRO COMPARATIVO</p></strong><br>

                El cuadro comparativo consiste en la en contrastación de dos o más elementos de
                un objeto de estudio. Su punto de partida es la identificación de categorías o
                variables que son la base para la contrastación.<br><br>

                <strong>Utilidad:</strong><br><br>

                Como estrategia de aprendizaje es de gran utilidad para el estudiante ya que le
                permite identificar las diferencias y semejanzas entre dos o más elementos de un
                objeto de estudio, además de que al llevarlo a cabo ejercita procesos cognitivos
                como la identificación, descripción, observación, contrastación, deducción e
                inducción.<br><br>

                <strong>Procedimiento para su elaboración:</strong><br>
                Para su correcta elaboración es necesario:<br><br>

                <ol>
                    <li>Leer el texto u observar la situación detenidamente.</li>
                    <li>Aclarar las deudas que surjan</li>
                    <li>Identificar los elementos genéricos a contrastar (dos o tres teorías, enfoques,
                        escuelas, hombres, mujeres, autos, casas, procesos, entre otros)</li>
                    <li>De cada elemento genérico, identificar sus categorías observables, (si son teorías,
                        antecedentes, autores centrales, conceptos, principios si son autos, motor, llantas,
                        velocidad máxima, etc.)</li>
                    <li>Una vez identificadas las categorías, diseñar el cuadro que servirá de base para la
                        contrastación.</li>
                    <li>Se procede a describir el contenido de cada recuadro.</li>
                    <li>Se elabora un documento final que integre las diferencias y semejanzas de los
                        elementos genéricos</li>
                </ol><br><br>

                <div style="margin-left: 5%">
                    <img width="700" height=500" src="images/10_Esquema_y_cuadro_comparativo/t1.png">
                </div><br>

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
