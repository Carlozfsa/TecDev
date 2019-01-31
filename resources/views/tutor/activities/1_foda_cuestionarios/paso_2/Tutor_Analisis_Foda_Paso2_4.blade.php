@extends('layouts.sideBarTutor')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 2: INTROSPECCIÓN. Debilidades.
        </div>
        <div class="panel-body">



            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_foda_2_4')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">

                            @if($f_decode!=NULL)


                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <th style="text-align: center; background-color: lightblue;">Debilidades</th>
                                    </tr>
                                    @foreach($f_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                    <br>
                                </table><br>

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
                                        <textarea rows="5" name ="retro4" class="form-control"></textarea>
                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <br>
                                        <strong>Calificación:</strong>
                                        <br><br>
                                        <input type="text" name="cal4" class="form-control name_list center-block">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <br><br>
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </form>

                @else

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_foda_2_4')}}">
                        {{csrf_field()}}
                        <div class="table-responsive">

                            @if($f_decode!=NULL)


                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <th style="text-align: center; background-color: lightblue;">Debilidades</th>
                                    </tr>
                                    @foreach($f_decode as $key=>$value)
                                        <tr>
                                            <td >{{$value}}</td>
                                        </tr>
                                    @endforeach
                                    <br>
                                </table><br>

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

                        </div>
                    </form>

                @endif

            </div>

        </div>
    </div>

  <div class="center-block" style="margin-left:20%">
    <nav aria-label="Page navigation">
        <ul class="pagination center-block">
            <li>

            </li>
            <li><a href="{{url('/foda_1_1')}}">Fortalezas 1</a></li>
            <li><a href="{{url('/foda_1_2')}}">Fortalezas 2</a></li>
            <li><a href="{{url('/foda_1_3')}}">Fortalezas 3</a></li>
            <li><a href="{{url('/foda_1_4')}}" style="background-color: lightgray;">Fortalezas 4</a></li>
            <li>
                <a href="{{url('/foda_1_2')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="f1[]" placeholder="Escriba una fortaleza" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
