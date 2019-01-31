@extends('layouts.sideBarAlumno')

@section('content')

    <h2>RESUMEN Y ENSAYO ACADÉMICO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">Estructura o elementos del ensayo:</p></strong><br>

                El ensayo se estructura en tres partes principales: Introducción, cuerpo y conclusión.
                Todo ensayo debe de contar con estas partes, pero no necesariamente marcadas
                por espacios o subtítulos, simplemente han de desempeñar la función que les
                corresponde y que se describe.<br><br>

                <ol>
                    <li>
                        <strong>Titulo:</strong><br>
                        Este debe ser atractivo y claro
                    </li><br>

                    <li>
                        <strong>Introducción:</strong><br>
                        Es la parte donde se da a conocer el tema que se
                        desarrollará después y los propósitos del mismo. En esta se pueden
                        dar generalidades, antecedentes, explicar la naturaleza del tema,
                        especificar las variables que se trabajarán a lo largo del ensayo, su
                        enfoque, o incluso propone una tesis o suposición.
                        A veces se parte de un ejemplo o situación particular en la que el tema
                        tenga aplicación, para señalar la importancia de abordarlo y atraer el
                        interés del lector.
                    </li><br>

                    <li>
                        <strong>Cuerpo:</strong><br>
                        Es el desarrollo del ensayo, la explicación de los que se tiene
                        sobre el mismo, se comenta en forma personal la información
                        recabada, se proporcionan datos y se amplían los conceptos todo lo
                        que sea necesario, mediante reflexiones, ejemplos, comentarios,
                        comparaciones, etc.<br>
                        También se pueden confrontar ideas de varios autores a propósito del
                        tema que se investiga, estableciendo puntos de afinidad o
                        discrepancias. Es el cuerpo del ensayo, porque su extensión abarca
                        dos terceras partes del total.
                    </li><br>

                    <li>
                        <strong>Conclusiones:</strong><br>
                        Incluye el resumen de los puntos desarrollados a lo
                        largo del ensayo, comenta los resultados y da una opinión final. Una
                        manera recomendable de concluir es retornando a la introducción, para
                        ver hasta qué punto se logró lo anunciado en ella.                    </li><br>

                    <li>
                        <strong>Bibliografía:</strong><br>
                        Se incluyen los datos completos de la fuente bibliográfica
                    </li><br>

                </ol>


            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:20%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/ens_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/ens_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/ens_l_2')}}">Lectura 2</a></li>
            <li><a href="{{url('/ens_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/ens_1')}}" style="background-color: lightgray;"><strong>Primer ejercicio</strong></a></li>
            <li>
                <a href="{{url('/ens_1')}}" aria-label="Next">
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
