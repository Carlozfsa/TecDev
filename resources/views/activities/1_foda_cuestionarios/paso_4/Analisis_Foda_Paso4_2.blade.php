@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 4: INTROSPECCIÓN. Oportunidades.

        </div>
        <div class="panel-body">

            <strong>INSTRUCCIONES:</strong>

            <div class="instrucciones" style="margin: 10px">
                Cuando piensas en el próximo capítulo de tu vida, ¿Cuáles son las posibilidades
                que más te entusiasman?
                <form name="add_fort" id="add_fort">

                    <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="name[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
                            </table>
                        <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
