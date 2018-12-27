@extends('layouts.sideBarAlumno')

@section('content')

    <h2>Panel de Actividades</h2>
    <div class="panel panel-default table-responsive">

        <div class="panel-body">



                <form name="add_fort" id="add_fort" method="post" action="{{url('/store/foda_1_1')}}">
                {{csrf_field()}}

                    <div class="table-responsive">
                            <table class="table table-striped" id="dynamic_field">
                                <thead>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Entregado</th>
                                    <th>Revisado</th>
                                    <th>Revisado por:</th>
                                    <th>Calificación</th>
                                </thead>

                                <tr>
                                    <td>1</td>
                                    <td>Linea del tiempo</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Cuestionarios FODA</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Administración del tiempo</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>El ser humano integral</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Desarrollo humano integral</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Inteligencias multiples</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Habilidades de estudio</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Memoria</td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Habilidades del pensamiento</td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Mapa mental y conceptual</td>
                                </tr>

                                <tr>
                                    <td>11</td>
                                    <td>Esquema y cuadro comparativo</td>
                                </tr>

                                <tr>
                                    <td>12</td>
                                    <td>Resumen y ensayo</td>
                                </tr>

                                <tr>
                                    <td>13</td>
                                    <td>Aprendizaje de las matemáticas</td>
                                </tr>

                                <tr>
                                    <td>14</td>
                                    <td>Inferencias lógicas</td>
                                </tr>

                                <tr>
                                    <td>15</td>
                                    <td>Relación y simbolización</td>
                                </tr>
                            </table>
                    </div>
                </form>

            </div>

        </div>
    </div>


@stop
