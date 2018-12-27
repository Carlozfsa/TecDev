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
                    <th>PUNTAJE</th>
                </tr>
                </thead>

                <tr>
                    <td>Lingüística</td>
                    <td>{{$ling}}</td>
                </tr>

                <tr>
                    <td>Lógica y matemática</td>
                    <td>{{$mat}}</td>
                </tr>

                <tr>
                    <td>Espacial</td>
                    <td>{{$esp}}</td>
                </tr>

                <tr>
                    <td>Física y cinestésica</td>
                    <td>{{$cin}}</td>
                </tr>

                <tr>
                    <td>Musical</td>
                    <td>{{$mus}}</td>
                </tr>

                <tr>
                    <td>Interpersonal</td>
                    <td>{{$inter}}</td>
                </tr>

                <tr>
                    <td>Intrapersonal</td>
                    <td>{{$intra}}</td>
                </tr>

            </table>


            <form name="add_fort" id="add_fort" method="post" action="{{url('/store/tutor_int_mult_ej_1')}}">
                {{csrf_field()}}
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
            </form>
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
