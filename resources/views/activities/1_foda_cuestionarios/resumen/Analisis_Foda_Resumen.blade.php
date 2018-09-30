@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>

    <table class="table-responsive" style="margin-left:15%">
        <canvas id="bueno" width="100" height="50" style="background-color:red; margin-left:42%"></canvas>

        <tr>
            <td>

                <div class="container col-sm-12">
                    <h2>Fortalezas</h2>
                    <div class="panel panel-default" style="padding: 3%">
                        <div class="panel-body"></div>

                        <div name="add_fort" id="add_fort">
                           <form>
                            <div class="table-responsive">
                                @foreach($fd as  $key=>$value)
                                        <input type="text" name="name[]" class="form-control name_list center-block" value="{{$value}}"  disabled>
                                @endforeach
                            </div>
                          </form>
                        </div>
                </div>

            </td>

            <td>

                <div class="container col-sm-12">
                    <h2>Oportunidades</h2>
                    <div class="panel panel-default panel-default" style="padding: 3%">
                        <div class="panel-body"></div>
                        <div name="add_fort" id="add_fort">
                            <form>
                                <div class="table-responsive">
                                    @foreach($od as  $key=>$value)
                                        <input type="text" name="name[]" class="form-control name_list center-block" value="{{$value}}"  disabled>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </td>
        </tr>

        <tr>

            <td>
                <canvas id="pasado" width="100" height="50" style="border:1px solid black;background-color:green; margin-left:5%" class="center-block"></canvas>

            </td>

            <td>
                <canvas id="ahora" width="100" height="50" style="border:1px solid black;background-color:dodgerblue; margin-left:-16%" class="center-block"></canvas>
            </td>

            <td>
                <canvas id="futuro" width="100" height="50" style="border:1px solid black;background-color:green; margin-left:-115%" class="center-block"></canvas>
            </td>


        </tr>

        <tr>
            <td>

                <div class="container col-sm-12">
                    <h2>Debilidades</h2>
                    <div class="panel panel-default" style="padding: 3%">
                        <div class="panel-body"></div>
                        <div name="add_fort" id="add_fort">
                            <form>
                                <div class="table-responsive">
                                    @foreach($dd as  $key=>$value)
                                        <input type="text" name="name[]" class="form-control name_list center-block" value="{{$value}}"  disabled>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </td>

            <td>

                <div class="container col-sm-12">
                    <h2>Amenazas</h2>
                    <div class="panel panel-default" style="padding: 3%">
                        <div class="panel-body"></div>
                        <div name="add_fort" id="add_fort">
                            <form>
                                <div class="table-responsive">
                                    @foreach($fd as  $key=>$value)
                                        <input type="text" name="name[]" class="form-control name_list center-block" value="{{$value}}"  disabled>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </td>

        </tr>


    </table>
    <canvas id="malo" width="100" height="50" style="border:1px solid black;background-color:red; margin-left:42%"></canvas>


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


<script>
    var canvas = document.getElementById("bueno");
    var ctx = canvas.getContext("2d");
    ctx.font = "20px Arial";
    ctx.fillText("Bueno",23,33);

    var canvas2 = document.getElementById("malo");
    var ctx2 = canvas2.getContext("2d");
    ctx2.font = "20px Arial";
    ctx2.fillText("Malo",30,33);

    var canvas3 = document.getElementById("ahora");
    var ctx3 = canvas3.getContext("2d");
    ctx3.font = "20px Arial";
    ctx3.fillText("Ahora",23,33);


    var canvas4 = document.getElementById("pasado");
    var ctx4 = canvas4.getContext("2d");
    ctx4.font = "20px Arial";
    ctx4.fillText("Pasado",17,33);

    var canvas5 = document.getElementById("futuro");
    var ctx5 = canvas5.getContext("2d");
    ctx5.font = "20px Arial";
    ctx5.fillText("Futuro",17,33);


</script>

@stop
