@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 4: INTROSPECCIÓN. Oportunidades.

        </div>
        <div class="panel-body">



                @if($edit == 0)

                <strong>INSTRUCCIONES:</strong>

                <div class="instrucciones" style="margin: 10px">
                    Cuando piensas en el próximo capítulo de tu vida, ¿Cuáles son las posibilidades
                    que más te entusiasman?
                </div>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_4_2')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="o2[]" placeholder="Escriba una oportunidad" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
                            </table>
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Guardar" />
                        </div>

                    </form>
                @else

                <div class="alert alert-success">
                    <strong>Aviso!</strong><br>
                    Registro guardado. Es posible editar la actividad.<br>
                    Puede continuar con la siguiente parte.
                </div><br>

                <strong>INSTRUCCIONES:</strong>

                <div class="instrucciones" style="margin: 10px">
                    Cuando piensas en el próximo capítulo de tu vida, ¿Cuáles son las posibilidades
                    que más te entusiasman?
                </div>

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/foda_4_2')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_edit">
                                @foreach($f_decode as $key=>$value)
                                    <tr id="row{{$key}}">
                                        <td ><input type="text" name="oe2[]" placeholder="Escriba una oportunidad" class="form-control name_list center-block" value="{{$value}}"></td>
                                        @if($key==1) <td><button type="button" name="add_edit" id="add_edit" class="btn btn-success center-block">Agregar</button></td> @else <td><button type="button" name="remove_edit" id="{{$key}}" class="btn btn-danger btn_remove_edit center-block">X</button></td> @endif
                                    </tr>
                                @endforeach
                            </table>
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Editar" />
                        </div>

                    </form>

                @endif

            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:15%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>
                    <a href="{{url('/foda_4_1')}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="{{url('/foda_4_1')}}">Oportunidades 1</a></li>
                <li><a href="{{url('/foda_4_2')}}" style="background-color: lightgray;">Oportunidades 2</a></li>
                <li><a href="{{url('/foda_4_3')}}">Oportunidades 3</a></li>
                <li><a href="{{url('/foda_4_4')}}">Oportunidades 4</a></li>
                <li>
                    <a href="{{url('/foda_4_3')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="o2[]" placeholder="Escriba una oportunidad" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').fadeOut();
        });

    });

</script>

<script>
    $(document).ready(function(){


        var i= $('#dynamic_field_edit').length;

        $('#add_edit').click(function(){
            i++;
            $('#dynamic_field_edit').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="oe2[]" placeholder="Escriba una oportunidad" class="form-control name_list" /></td><td><button type="button" name="remove_edit" id="'+i+'" class="btn btn-danger btn_remove_edit center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove_edit', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>
@stop
