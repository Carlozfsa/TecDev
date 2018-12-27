@extends('layouts.sideBarAlumno')

@section('content')

    <h2>INTELIGENCIAS MULTIPLES</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">EJERCICIO
        </div>
        <div class="panel-body">

            <div class="instrucciones" style="margin: 10px">


                <p style="text-align: center;">
                    <strong>Asignación de inteligencias</strong><br>
                </p>


                <p>Basandose en todos los ejercicios anteriores, determine que tipo de inteligencia tiene el alumno</p><br>

                {!! Form::open(['method'=>'POST', 'action'=>'TutorInteligenciasController@store_asign']) !!}

                <div class="table-responsive">

                <table class="table table-striped" id="dynamic_field">
                    <tr>
                        <div class="form-group">
                            <td>{!! Form::select('int',['0'=>'---Seleccione una inteligencia---', '1'=>'Lingüística','2'=>'Lógico-matemática','3'=>'Espacial o visual','4'=>'Musical','5'=>'Corporal o cinestésica','6'=>'Intrapersonal','7'=>'Interpersonal',], null,['style'=>'font-size: 15px;padding: 1px;', 'class'=>'form-control']) !!}</td>
                        </div>
                    </tr>
                </table>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Guardar" />

                </div>
                <br>

                {!! Form::close() !!}



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

@stop
