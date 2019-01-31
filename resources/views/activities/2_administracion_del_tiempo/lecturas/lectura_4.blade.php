@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Los 10 puntos más importantes para mejorar sus habilidades en la
                        administración del tiempo.</strong><br><br>

                    1. Defina claramente los objetivos y seleccione lo más importante.<br><br>
                    2. Analice como gasta su tiempo.<br><br>
                    3. Lleve una lista de tareas pendientes.<br><br>
                    4. Asigne prioridad a sus tareas.<br><br>
                    5. Planee su día desde el día anterior.<br><br>
                    6. No deje las cosas para después.<br><br>
                    7. Delegue en los demás.<br><br>
                    8. Aprenda a decir “NO. <br><br>
                    9. Concéntrese en la tarea actual<br><br>
                    10. No se olvide de la persona más importante. A veces, cuando tenemos
                    grandes proyectos en puerta, tendemos a olvidarnos de los demás y lo que es
                    peor, de nosotros mismos. Sin embargo, para ser altamente productivos
                    requerimos de un adecuado balance entre cuerpo y mente. Realizar
                    actividades que nos relajen, alimentarnos de manera adecuada y compartir
                    tiempo con nuestros seres queridos, es lo que realmente nos permite adquirir
                    un estado de armonía y rendir al máximo por periodos prolongados. No olvide
                    recargar sus baterías, porque solo así obtendrá la energía que necesita para
                    concretar todos sus proyectos.<br><br>

                    <strong>Desperdiciador De Tiempo (DDT):</strong><br>
                    Es cualquier cosa que impida que una persona alcance sus objetivos de la manera más efectiva posible.<br>
                    Desperdiciadores de tiempo Externos vs. Internos. Los DDT se dividen en
                    externos, si son provocados por otras personas, o internos si son provocados por
                    nosotros mismos.<br><br>

                    <strong>Desperdiciadores de tiempo Externos vs. Internos.</strong><br>
                    Los DDT se dividen en externos, si son provocados por otras personas, o internos si son provocados por
                    nosotros mismos.<br><br>

                    <strong>Desperdiciadores de tiempo</strong><br>
                    <table border = "1" style="padding:10%">
                        <tr>
                            <td style="padding:1%; text-align: center">
                                <strong>Desperdiciadores de tiempo externos</strong>
                            </td>

                            <td style="padding:1%; text-align: center">
                                <strong>Posibles soluciones</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <ul>
                                <li>Excesivo flujo de papeles.</li>
                                <li>Teléfono.</li>
                                <li>Chat, Facebook, You Tube.</li>
                                <li>Televisión</li>
                                <li>Visitantes.</li>
                                <li>Reuniones.</li>
                                <li>Fallas de comunicación.</li>
                                <li>Políticas y procedimientos.</li>
                                <li>Información. (Falta / exceso)</li>
                            </ul>
                            </td>
                        <td>
                            <ul>
                                <li>Agenda.</li>
                                <li>Citas.</li>
                                <li>Proyectos.</li>
                                <li>Actividades por realizar.</li>
                                <li>Marcar actividades en
                                <li>(A) Urgentes e Importantes,</li>
                                <li>(B) Importantes No Urgentes o</li>
                                <li>(C) Urgentes No Importantes</li>
                            </ul>
                        </td>
                    </tr>

                    </table>

                </div>


            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:23%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/tiempo_l_3')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/tiempo_l_1')}}">Lectura 1</a></li>
                <li><a href="{{url('/tiempo_l_2')}}">Lectura 2</a></li>
                <li><a href="{{url('/tiempo_l_3')}}">Lectura 3</a></li>
                <li><a href="{{url('/tiempo_l_4')}}" style="background-color: lightgray;">Lectura 4</a></li>
                <li><a href="{{url('/tiempo_ej_1')}}"><strong>Primer ejercicio</strong></a></li>
                <li>
                    <a href="{{url('/tiempo_ej_1')}}" aria-label="Next">
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
