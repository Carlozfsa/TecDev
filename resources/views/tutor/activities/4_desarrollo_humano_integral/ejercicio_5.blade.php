@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Ejercicio</strong><br>

                Analiza las analogías que hay en este pequeño poema.<br><br>


            <div style="margin-left: 33%">
                <strong>Azul de ti</strong><br>
                Pensar en ti es azul, como ir vagando<br>
                por un bosque dorado al mediodía:<br>
                nacen jardines en el habla mía<br>
                y con mis nubes por tus sueños ando.<br>
                Nos une y nos separa un aire blando,<br>
                una distancia de melancolía;<br>
                yo alzo los brazos de mi poesía,<br>
                azul de ti, dolido y esperando.<br>
                Es como un horizonte de violines<br>
                o un tibio sufrimiento de jazmines<br>
                pensar en ti, de azul temperamento.<br><br>
            </div>
                <div style="margin-left: 60%">
                    Eduardo Carranza (Colombia,l913)<br><br>
                </div>

                Observa que "pensar en azul" puede representar pensar en sentimientos de
                tranquilidad, paz, belleza del cielo; la relación entre "jardines" y "el habla mía" puede
                ser la misma que existe entre las cosas hermosas y las palabras que expresa el
                poeta.
                Trata, ahora, de encontrar otras relaciones analógicas en el resto del poema.<br>

                @if($edit==0)

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_des_hum_int_ej_5')}}">
                    {{csrf_field()}}

                    @if($f1_decode!=NULL)

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            @foreach($f1_decode as $key=>$value)
                                <tr>
                                    <td >{{$value}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

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
                            <textarea rows="5" name ="retro5" class="form-control"></textarea>
                            <br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <strong>Calificación:</strong>
                            <br><br>
                            <input type="text" name="cal5" class="form-control name_list center-block">
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

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_des_hum_int_ej_5')}}">
                        {{csrf_field()}}

                        @if($f1_decode!=NULL)

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                @foreach($f1_decode as $key=>$value)
                                    <tr>
                                        <td >{{$value}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>


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
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Edit" />
                                </td>
                            </tr>
                        </table>

                    </form>

                @endif

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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="log[]" placeholder="Escriba una relación analógica" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
