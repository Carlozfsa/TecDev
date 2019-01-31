@extends('layouts.sideBarTutor')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)


                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_hum_int_ej_1')}}">
                    {{csrf_field()}}

                        @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL)

                <table class="table table-bordered">
                    <thead style="background-color: darkgray;">
                        <tr>
                            <th>Característica</th>
                            <th>En lo personal como se considera en cada
                                características (justifique)
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <strong>Presentación personal</strong><br>
                            Aspecto exterior de una persona
                        </td>
                        <td>
                            {{$f1_decode}}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Salud</strong><br>
                            Condiciones físicas en que se
                            encuentra, hábitos alimenticios,
                            visita medica, entre otros.
                        </td>
                        <td>
                            {{$f2_decode}}

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Simpatía</strong><br>
                            Relación entre dos cuerpos o
                            sistemas por la que la acción de
                            uno induce el mismo
                            comportamiento en el otro.
                        </td>
                        <td>
                            {{$f3_decode}}

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
                                <textarea rows="5" name ="retro" class="form-control">{{$retro}}</textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal_final" class="form-control name_list center-block" value ={{$cal}}>
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

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_hum_int_ej_1')}}">
                        {{csrf_field()}}

                        @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL)

                        <table class="table table-bordered">
                            <thead style="background-color: darkgray;">
                            <tr>
                                <th>Característica</th>
                                <th>En lo personal como se considera en cada
                                    características (justifique)
                                </th>
                            </tr>
                            </thead>
                            <tr>
                                <td>
                                    <strong>Presentación personal</strong><br>
                                    Aspecto exterior de una persona
                                </td>
                                <td>
                                    {{$f1_decode}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Salud</strong><br>
                                    Condiciones físicas en que se
                                    encuentra, hábitos alimenticios,
                                    visita medica, entre otros.
                                </td>
                                <td>
                                    {{$f2_decode}}

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Simpatía</strong><br>
                                    Relación entre dos cuerpos o
                                    sistemas por la que la acción de
                                    uno induce el mismo
                                    comportamiento en el otro.
                                </td>
                                <td>
                                    {{$f3_decode}}

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
                                    <input type="text" name="cal_e" value="{{$cal}}" class="form-control name_list center-block">
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
