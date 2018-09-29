@extends('layouts.sideBarAlumno')

@section('content')

    <h2>MAPA MENTAL Y MAPA CONCEPTUAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">MAPA MENTAL Y MAPA CONCEPTUAL</p></strong><br>

                <strong>Actividades de elaboración de mapas conceptuales.</strong><br><br>

                <ol type="a">
                    <li>Definir la lista de los términos conceptuales claves que se incorporarán
                        al mapa.
                    </li>

                    <li>Piense en las categorías clave del tema</li>

                    <li>Clasificarlos por niveles de abstracción e inclusividad (al menos en
                        dos).
                    </li>

                    <li>Esto permitirá establecer las relaciones existentes entre los conceptos.</li>

                    <li>Identificar el concepto central o nuclear y ubícalo en la parte superior
                        del mapa, si es el de mayor nivel de inclusividad, sino es así,
                        destacarlo con un color o señalización diferente.</li>

                    <li>Intentar construir un primer mapa conceptual. No olvidar organizarlo
                        jerárquicamente por niveles de inclusividad y vincular todos los
                        conceptos entre sí.
                    </li>

                    <li> Identificar algunas relaciones cruzadas entre los conceptos (relaciones
                        circulares u
                    </li>

                    <li>horizontales entre conceptos, por ejemplo) y emplearlas. O Reelaborar
                        el mapa al</li>

                    <li>menos una vez más para identificar relaciones no previstas.</li>

                    <li>Preparar la presentación que regularmente acompaña a los mapas</li>

                    <li>Si se trata de un mapa integrador acerca de algún tipo de información,
                        cerciorarse</li>

                    <li>de que representa el todo.</li>
                </ol>

                <br>

                <div style="margin-left: 5%">
                    <img width="700" height=500" src="images/9_Mapa_mental_y_conceptual/ej.png">
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
