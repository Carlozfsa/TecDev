@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                @if($edit == 0)

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/hum_int_ej_1')}}">
                    {{csrf_field()}}


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
                            <textarea name="pres_per" class = "form-control" cols="12">
                            </textarea>
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
                             <textarea name="salud" class = "form-control" cols="12">
                            </textarea>
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
                            <textarea name="simpatia" class = "form-control" cols="12">
                            </textarea>
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
                    </div>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/hum_int_ej_1')}}">
                        {{csrf_field()}}


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
                            <textarea name="pres_per_e" class = "form-control" cols="12">{{$f_decode1}}</textarea>
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
                             <textarea name="salud_e" class = "form-control" cols="12">{{$f_decode2}}</textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Simpatía</strong><br>
                                    Relación entre dos cuerpos o
                                    sistemas por la que la acción de
                                    uno induce el mismo
                                    comportamiento en el otro.{{$f_decode2}}
                                </td>
                                <td>
                                    <textarea name="simpatia_e" class = "form-control" cols="12">{{$f_decode3}}</textarea>
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
    </div>

  <div class="center-block" style="margin-left:35%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li><a href="{{url('/des_hum_int_ej_1')}}"><strong>Siguiente actividad</strong></a></li>
            <li>
                <a href="{{url('/des_hum_int_ej_1')}}" aria-label="Next">
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
