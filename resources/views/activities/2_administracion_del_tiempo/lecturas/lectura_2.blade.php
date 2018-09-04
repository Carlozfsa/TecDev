@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ADMINISTRACIÓN DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Lectura
        </div>
        <div class="panel-body">
            
            <div class="instrucciones" style="margin: 10px">

                <div style="border: 2px solid mediumseagreen; border-radius: 5px; padding: 3%;">
                    <strong>Algunas de las características del tiempo son:</strong><br><br>
                    1. Puede ser un enemigo a vencer o un aliado si lo logramos organizar.<br>
                    2. Puede ser un recurso escaso, si no se controla en función de las prioridades
                    que se le asignen a las actividades diarias aun emprendedor.<br>
                    3. Puede ser un amigo o un enemigo en el logro de los objetivos y metas que se
                    planteen.<br>
                    4. No se puede comprar.<br>
                    5. No se puede atrapar, detener o regresar.<br>
                    6. Es lo más valioso que tiene los individuos, por lo que hay que utilizarlo con el
                    máximo grado de efectividad.<br>
                    7. Se dice que nadie tiene suficiente tiempo, sin embargo todo el mundo tiene
                    todo el tiempo que hay. <br>
                    Esta es la gran paradoja del tiempo.<br>
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
