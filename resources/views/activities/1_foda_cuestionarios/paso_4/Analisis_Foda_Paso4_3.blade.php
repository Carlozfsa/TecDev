@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 4: INTROSPECCIÓN. Oportunidades.

        </div>
        <div class="panel-body">

            <strong>INSTRUCCIONES:</strong>

            <div class="instrucciones" style="margin: 10px">
                ¿Qué harías en el próximo capítulo de su vida si no tuviera miedo?

                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_4_3')}}">
                    {{csrf_field()}}

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td ><input type="text" name="o3[]" placeholder="Escriba su respuesta" class="form-control name_list center-block"></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Guardar" />
                    </div>
                </form>

            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:15%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/foda_4_2')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/foda_4_1')}}">Oportunidades 1</a></li>
                <li><a href="{{url('/foda_4_2')}}">Oportunidades 2</a></li>
                <li><a href="{{url('/foda_4_3')}}" style="background-color: lightgray;">Oportunidades 3</a></li>
                <li><a href="{{url('/foda_4_4')}}">Oportunidades 4</a></li>
                <li>
                    <a href="{{url('/foda_4_4')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="o3[]" placeholder="Escriba su respuesta" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>
@stop
