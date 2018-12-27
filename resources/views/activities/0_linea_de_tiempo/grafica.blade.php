@extends('layouts.sideBarAlumno')

@section('content')

    <h2>LÍNEA DEL TIEMPO</h2>
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">Paso 1: INTROSPECCIÓN. Fortalezas.
        </div>
        <div class="panel-body">

            <strong>OBJETIVO</strong>



            <div class="instrucciones" style="margin: 10px">

                <div id="chart">

                </div>


            </div>

        </div>
    </div>

    <div class="center-block" style="margin-left:20%">
        <nav aria-label="Page navigation">
            <ul class="pagination center-block">
                <li>

                </li>
                <li><a href="{{url('/foda_1_1')}}" style="background-color: lightgray;">Fortalezas 1</a></li>
                <li><a href="{{url('/foda_1_2')}}">Fortalezas 2</a></li>
                <li><a href="{{url('/foda_1_3')}}">Fortalezas 3</a></li>
                <li><a href="{{url('/foda_1_4')}}">Fortalezas 4</a></li>
                <li>
                    <a href="{{url('/foda_1_2')}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@stop

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@stop
