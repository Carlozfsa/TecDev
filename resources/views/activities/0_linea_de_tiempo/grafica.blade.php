@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LÍNEA DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Paso 1: INTROSPECCIÓN. Fortalezas.
        </div>
        <div class="panel-body">

            <strong>OBJETIVO</strong>
            <br><br>

            <style type="text/css">
                #add {
                    margin-top: 15%;
                }
            </style>

            <style type="text/css">
                #nivel {
                    font-size: 15px;
                    padding: 1px;
                }
            </style>

            @if($edit==0)

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/linea_tiempo')}}">
                {{csrf_field()}}

                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td>Edad</td>
                            <td>Acontecimiento</td>
                            <td>Nivel de felicidad</td>
                            <td rowspan="2"><button type="button" name="add" id="add" class="btn btn-success center-block padding-top: 5px">Agregar</button></td>
                        </tr>
                        <tr>
                            <td ><input type="text" name="edad[]" class="form-control name_list center-block"></td>
                            <td ><input type="text" name="evento[]" class="form-control name_list center-block"></td>
                            <td>
                            <select name ="nivel[]" id="nivel" class="form-control name_list center-block">
                                <option value="5">Muy feliz</option>
                                <option value="4">Feliz</option>
                                <option value="3">Regular</option>
                                <option value="2">Triste</option>
                                <option value="1">Muy Triste</option>
                            </select>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Guardar y graficar" />
                </div>

            </form>


            @else

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/linea_tiempo')}}">
                    {{csrf_field()}}

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td>Edad</td>
                                <td>Acontecimiento</td>
                                <td>Nivel de felicidad</td>
                                <td rowspan="2"><button type="button" name="add" id="add" class="btn btn-success center-block padding-top: 5px">Agregar</button></td>
                            </tr>

                            {{--@for($row = 0; $row < sizeof($f_decode2); $row++)--}}

                                {{--@foreach($f_data as $key=>$value)--}}

                                {{--<tr id="row{{$key}}"></tr><tr id="row'+i+'" class="dynamic-added">--}}
                                    {{--<td><input type="text" name="edad[]" class="form-control name_list" value ="{{$value}}"/></td>--}}
                                    {{--<td><input type="text" name="evento[]" class="form-control name_list" /></td><td><select name ="nivel[]" id="nivel" class="form-control name_list center-block"><option value="5">Muy feliz</option><option value="4">Feliz</option><option value="3">Regular</option><option value="2">Triste</option><option value="1">Muy Triste</option></select></td>--}}
                                    {{--<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td>--}}
                                {{--</tr>--}}

                                {{--@endforeach--}}
                            {{--@endfor--}}
                        </table>
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Editar y guardar" />
                    </div>

                </form>

            @endif



            <br><br>

            <div class="instrucciones" style="margin: 10px">

                <canvas id="myChart" width="400" height="400"></canvas>


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
    </script>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {{$f_decode1}},
                datasets: [{
                    label: 'Acontecimiento de vida',
                    data: {{$f_decode3}},//["5", "9"],
                    fill: false,
                    borderColor: "#3e95cd",
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
                    mode: 'index',
                    axis: 'y'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true,
                            fixedStepSize: 1
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Nivel de felicidad'
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero:true,
                            fixedStepSize: 1
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Edad'
                        }
                    }]
                }
            }
        });
    </script>

    <script>
        $(document).ready(function(){


            var i= 1;

            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="edad[]" class="form-control name_list" /></td><td><input type="text" name="evento[]" class="form-control name_list" /></td><td>\n' +
                    '                            <select name ="nivel[]" id="nivel" class="form-control name_list center-block">\n' +
                    '                                <option value="5">Muy feliz</option>\n' +
                    '                                <option value="4">Feliz</option>\n' +
                    '                                <option value="3">Regular</option>\n' +
                    '                                <option value="2">Triste</option>\n' +
                    '                                <option value="1">Muy Triste</option>\n' +
                    '                            </select>\n' +
                    '                            </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

        });
    </script>
@stop
