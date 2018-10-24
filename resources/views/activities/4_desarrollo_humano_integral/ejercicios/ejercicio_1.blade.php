@extends('layouts.sideBarAlumno')

@section('content')

    <h2>DESARROLLO HUMANO INTEGRAL (DIMENSION COGNITIVA)</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio 1
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <div class="col-sm-6">
                    <img width="400" height=300" src="images/4_desarrollo_humano_integral/e_1_7_dif.png">

                    <div id = "info_1" class="alert alert-danger" style="text-align: center">
                        Solamente hay 7 diferencias!
                    </div>
                </div>



                <script type="text/javascript">
                    $('#info_1').hide();
                </script>

                <div class="col-sm-6">

                    <strong style="text-align: center">Escribe aquí las 7 diferencias que encontraste:</strong>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/des_hum_int_ej_1')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="dif[]" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
                            </table>

                        </div>

                        <div class="row" style="margin-left: 22%;">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary col-sm-8" value="Guardar" />
                        </div>

                    </form>


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
    $('#info_1').hide();

        $('#add').click(function(){

            if(i<=6){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="dif[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
            }else{
                $('#info_1').fadeIn();
            }

        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
