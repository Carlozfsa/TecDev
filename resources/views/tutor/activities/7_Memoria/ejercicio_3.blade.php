@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">CASOS DE ESTUDIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">



                <strong>CASO 2: La tragedia de no poder olvidar</strong><br>
                En 1973, Alexander R. Luria, un psicólogo ruso que dedico toda su vida a la
                neuropsicología escribió un libro titulado Pequeño libro de una gran memoria,
                sobre el caso excepcional de una persona datada de una memoria prodigiosa. El
                personaje en cuestión, conocido el señor S. era un periodista de treinta años, sin
                ningún antecedente familiar ni personal remarcable, que fue enviado a Luria para
                su estudio como prodigio humano. Su pasmosa memoria le permitiría repetir sin
                dificultad y después de una sola presentación, setenta o más palabras con o sin
                sentido, en su propia lengua o en lenguas desconocidas, formulas científicas que
                no comprendía y otras hazañas por el estilo. Incluso era capaz de repetir las
                listas en orden inverso al que habían presentado. Además, esta información la
                retenía durante largos periodos de tiempo, de modo que era capaz de recordar
                diez años después de haber oído. Recordaba, además, las situaciones y
                circunstancias en las que las había aprendido. Esta capacidad de recuerdo y la
                exactitud de su reproducción, él las explicaba con una facilidad en visualizar todo
                tipo de información, como si tratase de verlas en una pantalla a la que podía
                recurrir con facilidad. También destacaba que tenía una gran facilidad para poder
                asociar todo lo visto u oído a otros sentidos (olfato, vista, gusto esto emocional).
                Al señor no le preocupaba como recordar si no como olvidar, se sentía
                atosigado por la cantidad de información que emergía a su mente ante cualquier
                circunstancia y la situación le llego angustiar. Intentaba olvidar colocando la
                información en una imaginaria pizarra y borrándola. Esta sugestión le servía
                parcialmente como técnica de olvido ante las situaciones de inferencia que se le
                creaba en los teatros donde actuaba. A acabo su vida cambiando
                constantemente de oficio y no saco casi ningún provecho de su excepcional
                cualidad amnésica.



            </div>

            @if($edit==0)

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_mem_3')}}">
                {{csrf_field()}}

                @if($f1_decode != NULL && $f2_decode != NULL)

                <table class="table table-bordered">
                <tr style="color:black; background-color: royalblue;">
                    <td>Proponga preguntas del caso a los compañeros de clase:</td>
                </tr>

                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                @foreach($f1_decode as $key=>$value)
                                    <tr>
                                        <td >{{$value}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </td>
                </tr>
                <tr style="color:black; background-color: royalblue;">
                    <td>Conclusión del caso:</td>
                </tr>
                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field2">
                                <tr>
                                    <td>{{$f2_decode}}</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                </table>

                @else

                    <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                        <strong>Aviso!</strong><br>
                        El alumno no ha entregado esta parte de la actividad.
                    </div><br>

                @endif

                <table class="col-lg-12">
                    <tr>
                        <td><strong>Retroalimentación:</strong></td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <textarea rows="5" name ="retro3" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal3" class="form-control name_list center-block">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                        </td>
                    </tr>
                </table>

            </form>

            @else

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_mem_3')}}">
                    {{csrf_field()}}

                    @if($f1_decode != NULL && $f2_decode != NULL)

                    <table class="table table-bordered">
                        <tr style="color:black; background-color: royalblue;">
                            <td>Proponga preguntas del caso a los compañeros de clase:</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                        @foreach($f1_decode as $key=>$value)
                                            <tr>
                                                <td >{{$value}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr style="color:black; background-color: royalblue;">
                            <td>Conclusión del caso:</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field2">
                                        <tr>
                                            <td>{{$f2_decode}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    @else

                        <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                            <strong>Aviso!</strong><br>
                            El alumno no ha entregado esta parte de la actividad.
                        </div><br>

                    @endif

                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro_e" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal_e" class="form-control name_list center-block" value="{{$cal}}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Editar" />
                            </td>
                        </tr>
                    </table>

                </form>

            @endif

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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="c2[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
