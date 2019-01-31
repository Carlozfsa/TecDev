@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">CASOS DE ESTUDIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


            </div>

            @if($edit==0)

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

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/mem_3')}}">
                {{csrf_field()}}

            <table class="table table-bordered">
                <tr style="color:black; background-color: royalblue;">
                    <td>Proponga preguntas del caso a los compañeros de clase:</td>
                </tr>

                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="c2[]" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
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
                                    <td><textarea name="con2" class="form-control name_list center-block"></textarea></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                </table>

                <div class="row" style="margin-left: 22%;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                </div>

            </form>

            @else

                <div class="alert alert-success">
                    <strong>Aviso!</strong><br>
                    Registro guardado. Es posible editar la actividad.<br>
                    Puede continuar con la siguiente parte.
                </div><br><br>

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

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/mem_3')}}">
                    {{csrf_field()}}

                    <table class="table table-bordered">
                        <tr style="color:black; background-color: royalblue;">
                            <td>Proponga preguntas del caso a los compañeros de clase:</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field_edit_1">
                                        @foreach($f_decode1 as $key=>$value)
                                            <tr id="row_e_1{{$key}}">
                                                <td ><input type="text" name="c2_e[]" placeholder="Escriba una fortaleza" class="form-control name_list center-block" value="{{$value}}"></td>
                                                @if($key==1) <td><button type="button" name="add_edit_1" id="add_edit_1" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit_1" id="{{$key}}" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td> @endif
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
                                    <table class="table table-bordered" id="dynamic_field_edit_2">
                                        <tr>
                                            <td><textarea name="con2_e" class="form-control name_list center-block">{{$f_decode2}}</textarea></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <div class="row" style="margin-left: 22%;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Editar" />
                    </div>

                </form>


            @endif

        </div>
    </div>

  <div class="center-block" style="margin-left:23%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>
                <a href="{{url('/mem_2')}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="{{url('/mem_1')}}">Ejercicio 1</a></li>
            <li><a href="{{url('/mem_2')}}">Ejercicio 2</a></li>
            <li><a href="{{url('/mem_3')}}" style="background-color: lightgray;">Ejercicio 3</a></li>
            <li><a href="{{url('/mem_4')}}">Ejercicio 4</a></li>
            <li>
                <a href="{{url('/mem_4')}}" aria-label="Next">
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

<script>
    $(document).ready(function(){


        var i= $('#dynamic_field_edit_1').length;

        $('#add_edit_1').click(function(){
            i++;
            $('#dynamic_field_edit_1').append('<tr id="row_e_1'+i+'" class="dynamic-added"><td><input type="text" name="c2_e[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove_edit_1" id="'+i+'" class="btn btn-danger btn_remove_edit_1 center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove_edit_1', function(){
            var button_id = $(this).attr("id");
            $('#row_e_1'+button_id+'').remove();
        });

    });
</script>
@stop
