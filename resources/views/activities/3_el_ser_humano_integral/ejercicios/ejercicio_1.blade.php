@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <table class="table table-bordered">
                    <thead class="thead-light">
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
                            1
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
                            1
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
                            1
                        </td>
                    </tr>

                </table>

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
