@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 2: INTROSPECCIÓN. Debilidades.
        </div>
        <div class="panel-body">

                <strong>OBJETIVO</strong>

            <div class="objetivo" style="margin: 10px">
                Identifica qué es lo que te está frenando e imponiendo límites en el siguiente capítulo
                de su vida. Tener claridad sobre los recursos, capacidades y cualidades de tu fuerza
                interna.
            </div>

            <strong>INSTRUCCIONES:</strong>

            <div class="instrucciones" style="margin: 10px">
                1. Conviértete en “observador desapegado” y revise su línea de vida.<br>
                2. Contesta las siguientes preguntas y escriba sus respuestas en los espacios
                destinados para ello.<br>
                Observa los momentos en los que experimentaste el fracaso. Presta especial
                atención a los “patrones” recurrentes de fracaso en tu vida.<br>
                ¿Cuál es la debilidad o deficiencia más común que consideras tener y que piensas que está
                relacionada con estos fracasos?

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_2_1')}}">
                    {{csrf_field()}}

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td ><input type="text" name="d1[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Guardar" />
                    </div>
                </form>

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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="d1[]" placeholder="Escriba una debilidad" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
