@extends('layouts.sideBarAlumno')

@section('content')

    <h2>EL SER HUMANO INTEGRAL</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Ejercicio
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">

                <strong>Ejercicio</strong><br>

                Encuentra el término que falta en las siguientes analogías. Especifica las relaciones
                que se establecen Utiliza los pasos que vieron en clase.

                <div class="form-group">

                    {!! Form::open() !!}
                        {!! Form::label('lbl1.1','1. Gato es a ratón como caballo es a') !!}
                        {!! Form::text('txt1.1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl1.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt1.2', null, ['class'=>'form-control']) !!}
                        {!! Form::text('txt1.3', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl2.1','2. Barco es a tren como tiburón es a') !!}
                        {!! Form::text('txt2.1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl2.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt2.2', null, ['class'=>'form-control']) !!}
                        {!! Form::text('txt2.3', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl3.1','3. Amanecer es a felicidad como noche es a') !!}
                        {!! Form::text('txt3.1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl3.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt3.2', null, ['class'=>'form-control']) !!}
                        {!! Form::text('txt3.3', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl4.1','4. Volar es a libertad como arrastrarse es ') !!}
                        {!! Form::text('txt4.1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl4.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt4.2', null, ['class'=>'form-control']) !!}
                        {!! Form::text('txt4.3', null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('lbl5.1','5. Café es a galleta como hombre es a ') !!}
                        {!! Form::text('txt5.1', null, ['class'=>'form-control']) !!}
                        {!! Form::label('lbl5.2','Relación(es) que se repite(n):') !!}
                        {!! Form::text('txt5.2', null, ['class'=>'form-control']) !!}
                        {!! Form::text('txt5.3', null, ['class'=>'form-control']) !!}<br><br>






                    {!! Form::close() !!}<br>





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
