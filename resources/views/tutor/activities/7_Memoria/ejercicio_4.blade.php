@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LA MEMORIA</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">CASOS DE ESTUDIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>INSTRUCCIONES:</strong> Elabore un escrito donde puntualice lo descubierto en su
                dimensión física, inteligencia, hábitos de estudio, memoria, lectura, fortalezas y
                debilidades para plasmarlo en un plan de mejora, apoyado de La línea de la vida y
                el Análisis FODA.<br><br>
                <div class="form-group">
                    {!! Form::open(['method'=>'POST', 'action'=>'TutorMemoriasController@store_mem_4']) !!}
                        {!! Form::label('escrito', $f1_decode,  ['class'=>'form-control']) !!}<br>
                        {!! Form::submit('Guardar', ['class'=>'btn-primary form-control']) !!}


                    <table class="col-lg-12">
                        <tr>
                            <td><strong>Retroalimentación:</strong></td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <textarea rows="5" name ="retro" class="form-control"></textarea>
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br>
                                <strong>Calificación:</strong>
                                <br><br>
                                <input type="text" name="cal" class="form-control name_list center-block">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br><br>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Guardar" />
                            </td>
                        </tr>
                    </table>


                    {!! Form::close() !!}
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
