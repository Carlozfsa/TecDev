@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Principios básicos para administrar con eficiencia el tiempo:</strong><br><br>
                    1. Una lista de las actividades de una semana completa, tomada con
                    incrementos de 15 minutos cada una, facilita la utilización efectiva del tiempo.<br><br>
                    2. Esta comprobado y es un principio fundamental de la planeación del tiempo,
                    que toda hora empleada en planear eficazmente ahorra de tres a cuatro horas
                    de ejecución y produce mejores resultados.<br><br>
                    3. Una técnica recomendable para administrar mejor el tiempo, es utilizar los
                    últimos 20 minutos de labores, en planear el día siguiente.<br><br>
                    4. El tiempo del emprendedor rara vez se utiliza exactamente como él lo planea.<br><br>
                    Pero se debe procurar, dentro de lo posible, respetar las actividades y
                    compromisos establecidos.<br><br>
                    5. Los resultados más efectivos se logran teniendo objetivos y programas
                    planeados, más que por la pura casualidad.<br><br>
                    6 El tiempo disponible debe ser asignado a tareas en orden de prioridad, o sea
                    que los emprendedores deben utilizar su tiempo en relación a la importancia
                    de sus actividades.<br><br>
                    7 El establecer un determinado tiempo o fechas limites para cumplir con los
                    compromisos de los emprendedores, ayuda al resto del grupo de trabajo a
                    sobreponerse a la indecisión y a la tardanza.<br><br>
                    8. Evitar perder de vista los objetivos o los resultados esperados y concentrar los
                    esfuerzos en cada actividad.<br><br>
                    9 No confundir movimientos con realizaciones y actividades o acciones con
                    resultados.<br><br>
                    10. El tiempo utilizado en dar respuesta a problemas que surgen debe ser realista
                    y limitado a las necesidades de cada situación en particular, ignorando
                    aquellos problemas que tienden a resolverse por sí mismos lo que puede
                    ahorrar mucho tiempo.<br><br>
                    11. Posponer o aplazar la toma de decisiones puede convertirse en hábito que
                    desperdicia Tiempo, se pierden las oportunidades y aumenta la presión de las
                    fechas límite establecidas.<br><br>
                    12. Las actividades de rutina de bajo valor para el logro de los objetivos generales
                    deben ser delegadas o eliminadas hasta donde sea posible.<br><br>
                    13. Las actividades similares se deben agrupar para eliminar la repetición de
                    acciones y reducir las interrupciones a un mínimo como contestar o hacer
                    llamadas telefónicas.<br><br>
                    14. El mantener a la vista la agenda del día facilita el administrar correctamente el
                    tiempo.<br><br>
                    15. El registro de como se piensa utilizar el tiempo en el día, en la semana o en el
                    mes debe ser detallado, ya que omitir detalles es tan perjudicial para los
                    objetivos del registro del tiempo, como confiar en la memoria o establecer
                    metas irreales.<br><br>
                </div>


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
