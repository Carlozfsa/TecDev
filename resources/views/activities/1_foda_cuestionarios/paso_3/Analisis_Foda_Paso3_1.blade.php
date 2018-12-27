@extends('layouts.sideBarAlumno')

@section('content')

    <h2>ANÁLISIS FODA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">PASO 3: INTROSPECCIÓN. Amenazas.
        </div>
        <div class="panel-body">

                <strong>OBJETIVO</strong>

            <div class="objetivo" style="margin: 10px">
                Identifica los riesgos implicados en el próximo capítulo de tu vida. Ser consciente de
                los retos a futuro.
            </div>

            <strong>INSTRUCCIONES:</strong>

            <div class="instrucciones" style="margin: 10px">
                1. Conviértete en “observador desapegado” y revisa tu línea de vida.<br>
                2. Contesta las siguientes preguntas y escribe tus respuestas en los espacios<br>
                destinados para ello.<br><br>
                Cuando miras hacia el horizonte, en el próximo capítulo de su vida, ¿cuál crees
                que sea el reto más grande que tendrás que afrontar?

                @if($edit == 0)
                    <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_3_1')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td ><input type="text" name="a1[]" placeholder="Escriba una debilidad" class="form-control name_list center-block"></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success center-block">Agregar</button></td>
                                </tr>
                            </table>
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Guardar" />
                        </div>

                    </form>
                @else

                    <form name="add_fort" id="add_fort" method="post" action="{{url('/edit/foda_3_1')}}">
                        {{csrf_field()}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field_edit">
                                @foreach($f_decode as $key=>$value)
                                    <tr id="row{{$key}}">
                                        <td ><input type="text" name="ae1[]" placeholder="Escriba una amenaza" class="form-control name_list center-block" value="{{$value}}"></td>
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

    <div class="center-block" style="margin-left:12%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>

                </li>
                <li><a href="{{url('/foda_3_1')}}" style="background-color: lightgray;">Amenazas 1</a></li>
                <li><a href="{{url('/foda_3_2')}}">Amenazas 2</a></li>
                <li><a href="{{url('/foda_3_3')}}">Amenazas 3</a></li>
                <li><a href="{{url('/foda_3_4')}}">Amenazas 4</a></li>
                <li><a href="{{url('/foda_3_4')}}">Amenazas 4</a></li>
                <li><a href="{{url('/foda_3_5')}}">Amenazas 5</a></li>
                <li>
                    <a href="{{url('/foda_3_2')}}" aria-label="Next">
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
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="a1[]" placeholder="Escriba una amenaza" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove center-block">X</button></td></tr>');
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
            $('#dynamic_field_edit').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="ae1[]" placeholder="Escriba una amenaza" class="form-control name_list" /></td><td><button type="button" name="remove_edit" id="'+i+'" class="btn btn-danger btn_remove_edit center-block">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove_edit', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

    });
</script>
@stop
