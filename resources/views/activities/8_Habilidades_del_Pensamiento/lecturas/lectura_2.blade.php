@extends('layouts.sideBarAlumno')

@section('content')

    <h2>HABILIDADES BÁSICAS DE PENSAMIENTO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong><p style="text-align: center;">LA LECTURA</p></strong><br>

                Leer, que se suele definir como “extraer del libro lo que el autor pretendió” o “asimilar
                la palabra escrita” merece una definición mucho más completa. Podría ser la
                siguiente: la lectura es la interpelación plena del individuo con la información
                simbólica. Suele constituir el aspecto visual del aprendizaje y comprende las siete
                etapas siguientes:<br><br>

                <ul>
                    <li><strong>Reconocimiento</strong></li>
                    Supone en el lector el conocimiento de los símbolos alfabéticos. Cabría decir que
                    esta fase tiene lugar antes de que se inicie el acto material de la lectura.<br><br>

                    <li><strong>Asimilación</strong></li>
                    Es el proceso físico por el cual la luz reflejada en la palabra es percibida por el ojo y
                    transmitida al cerebro a través del nervio óptico.<br><br>

                    <li><strong>Intraintegración</strong></li>
                    Es el equivalente de la comprensión básica y supone la asociación adecuada de
                    todos los elementos contenidos en lo que se está leyendo.<br><br>

                    <li><strong>Extraintegración</strong></li>
                    Incluye el análisis, la crítica, la apreciación, la selección y el rechazo. Se trata del
                    proceso por el cual el lector asocia el conjunto de sus conocimientos anteriores con
                    los nuevos, resultantes de la lectura, realizando las conexiones oportunas.<br><br>

                    <li><strong>Retención</strong></li>
                    Consiste en el almacenamiento básico de la información y puede por sí solo
                    convertirse en un problema. La mayoría de los lectores habrán vivido la experiencia
                    de entrar en un aula para examinarse y quedarse con la mayor parte de la
                    información de que disponían sobre el tema del ejercicio “almacenada”, durante su
                    transcurso. Por consiguiente, el almacenamiento no basta por sí solo; debe ir
                    acompañado del recuerdo.<br><br>

                    <li><strong>Recuerdo</strong></li>
                    Es la capacidad de extraer del material almacenado la información que se precise,
                    particularmente, en el momento en que haya necesidad de ella.<br><br>

                    <li><strong>Comunicación</strong></li>
                    Es la aplicación que se da de forma inmediata o eventual a la información; incluye
                    una subdivisión muy importante: el pensamiento.<br><br>

                    Tal definición comprende la mayoría de los problemas que se contienen en la lista
                    anterior. Los únicos problemas que no se incluyen son los que, en cierto sentido,
                    están fuera del proceso de la lectura, tales como el entorno, la edad, etc.<br>


                </ul>

            </div>



        </div>
    </div>

  <div class="center-block" style="margin-left:15%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/pens_l_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mem_4')}}">Actividad previa</a></li>
            <li><a href="{{url('/pens_l_1')}}">Lectura 1</a></li>
            <li><a href="{{url('/pens_l_2')}}" style="background-color: lightgray;">Lectura 2</a></li>
            <li><a href="{{url('/pens_l_3')}}">Lectura 3</a></li>
            <li><a href="{{url('/pens_l_4')}}">Lectura 4</a></li>
            <li>
                <a href="{{url('/pens_l_4')}}" aria-label="Next">
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
