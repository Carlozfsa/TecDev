@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL APRENDIZAJE DE LAS MATEMÁTICAS</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">RELEVANCIA</p></strong><br>

                Proporciona al estudiante estrategias que le permitan: identificar la información,
                plantear el problema, resolverlo e interpretar la solución.<br><br>


                <ul>
                    <li>
                        Identificación de la información: Comprender el enunciado o gráfica
                        mediante el cual se expresa el problema y aislar sus variables.
                    </li>

                    <li>
                        Plantear el problema: Asociar la información a modelos ya establecidos o
                        fórmulas.
                    </li>

                    <li>
                        Resolver el problema: Aplicar procesos aritméticos, algebraicos y/o
                        geométricos que permitan llegar a la solución.
                    </li>

                    <li>
                        Interpretar el resultado: vincula el resultado obtenido al contexto del
                        problema.
                    </li>
                </ul><br>

                <strong>Rol del facilitador</strong><br><br>

                <ul>
                    <li>
                        Motivar al estudiante para que realice un esfuerzo, para relacionar
                        conocimientos nuevos con los ya existentes. A través de situaciones de
                        experiencia relacionadas con hechos u objetos.
                    </li>

                    <li>
                        Lograr que el estudiante se involucre afectivamente con el aprendizaje.
                    </li>

                    <li>
                        Propiciar situaciones para utilizar de manera efectiva el tiempo para
                        solucionar problemas.
                    </li>

                </ul><br>

                <strong>Rol del estudiante</strong><br><br>

                Del estudiante se espera que tenga cualidades como:<br>

                <ul>
                    <li>Actitud participativa.</li>
                    <li>Iniciativa por aprender</li>
                    <li>Puntualidad.</li>
                    <li>Responsabilidad en el cumplimiento de sus actividades.</li>
                    <li>Disposición para el trabajo en equipo.</li>
                    <li>Iniciativa para el planteamiento de dudas.</li>
                    <li>Disposición para hablar en público.</li>
                    <li>Cooperativo.</li>
                </ul><br>

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
