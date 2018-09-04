@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">TEST DE INTELIGENCIA
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong> RESULTADOS GENERALES EN PORCENTAJES SEGÚN TIPO DE INTELIGENCIA</strong><br>
                </p>

            </div>

            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>TIPO DE INTELIGENCIA</th>
                    <th>PORCENTAJE</th>
                    <th>ORDEN DE PRIORIDAD</th>
                </tr>
                </thead>

                <tr>
                    <td>Lingüística</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Lógica y matemática</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Espacial</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Física y cinestésica</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Musical</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Interpersonal</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Intrapersonal</td>
                    <td></td>
                    <td></td>
                </tr>

            </table>

            <p class="alert alert-info">
                <strong>
                    Recuerda, que NO solamente existen siete (7) inteligencias humanas, existen
                    muchas más. Recientemente Howard Gardner en su libro La inteligencia reformulada
                    ha sostenido "la posible existencia de varias otras inteligencias" (Gardner, 2001:57).
                    Tres nuevas inteligencias han sido nominadas como: inteligencia naturalista,
                    inteligencia espiritual e inteligencia existencial.
                    A continuación presentamos algunos ejemplos de las siete maneras de que los
                    estudiantes demuestren sus conocimientos sobre temas específicos. Este cuadro lo
                    presentó Thomas Armstrong en su libro Inteligencias múltiples en el salón de clases.
                    (1995)
                </strong>
            </p>

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
