@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Segunda parte: Ejercicio Domingo
        </div>
        <div class="panel-body">


            <div class="instrucciones" style="margin: 10px">

                @if($edit==0)

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_tiempo_ej_2_8')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">

                            @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL)


                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Hora</th>
                                        <th>Actividades</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>1:00 AM</td>
                                        <td>

                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field1">
                                                    @foreach($f1_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field2">
                                                    @foreach($f2_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>3:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field3">
                                                    @foreach($f3_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field4">
                                                    @foreach($f4_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field5">
                                                    @foreach($f5_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field6">
                                                    @foreach($f6_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field7">
                                                    @foreach($f7_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field8">
                                                    @foreach($f8_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field9">
                                                    @foreach($f9_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field10">
                                                    @foreach($f10_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field11">
                                                    @foreach($f11_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>13:00 PM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field13">
                                                    @foreach($f12_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>14:00 PM</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dynamic_field14">
                                                    @foreach($f13_decode as $key=>$value)
                                                        <tr>
                                                            <td>{{$value}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

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
                                        <textarea rows="5" name ="retro14" class="form-control"></textarea>
                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <br>
                                        <strong>Calificación:</strong>
                                        <br><br>
                                        <input type="text" name="cal14" class="form-control name_list center-block">
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

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_tiempo_ej_2_8')}}">
                        {{csrf_field()}}
                        <div class="table-responsive">

                            @if($f1_decode!=NULL && $f2_decode!=NULL && $f3_decode!=NULL && $f4_decode!=NULL && $f5_decode!=NULL && $f6_decode!=NULL && $f7_decode!=NULL && $f8_decode!=NULL)


                                {{--<table class="table table-bordered" id="dynamic_field">--}}
                                {{--<tr>--}}
                                {{--<th style="text-align: center; background-color: lightblue;">Fortalezas</th>--}}
                                {{--</tr>--}}
                                {{--@foreach($f1_decode as $key=>$value)--}}
                                {{--<tr>--}}
                                {{--<td >{{$value}}</td>--}}
                                {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--<br>--}}
                                {{--</table><br>--}}

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
                <li><a href="{{url('/foda_1_1')}}" style="background-color: lightgray;">Fortalezas 1</a></li>
                <li><a href="{{url('/foda_1_2')}}">Fortalezas 2</a></li>
                <li><a href="{{url('/foda_1_3')}}">Fortalezas 3</a></li>
                <li><a href="{{url('/foda_1_4')}}">Fortalezas 4</a></li>
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
