@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LÍNEA DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
        </div>
        <div class="panel-body">


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


            @endif

            <br><br>

            @if($f_decode1 != NULL && $f_decode1e != NULL && $f_decode2 != NULL && $f_decode3 != NULL && $f_decode3e != NULL)

            <div class="instrucciones" style="margin: 10px">

                <canvas id="myChart" width="400" height="400"></canvas>

            </div>

            @else

                    <div class="alert alert-danger" style="margin-left: 15%;margin-right: 15%; margin-top: 3%; text-align: center;">
                        <strong>Aviso!</strong><br>
                        El alumno no ha entregado esta parte de la actividad.
                    </div><br>

            @endif

            @if($edit==0)

            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_linea')}}">
                {{csrf_field()}}

                <div class="table-responsive">


                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro1" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal1" class="form-control name_list center-block">
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

                <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/tutor_linea')}}">
                    {{csrf_field()}}

                    <div class="table-responsive">


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
