<!doctype html>
<html>
    <head>
        <title>Panel de administración de actividades</title>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>

        <h2>Listado de actividades</h2>

    <div id="alert">avisos</div>


     <table border = "3">
         <thead>
            <tr>
                <td>Nombre</td>
                <td>Grupo</td>
                <td>Eliminar</td>
            </tr>
         </thead>


         @foreach($activities as $activity)

         <tr>
             <td>{{$activity->nombre}}</td>
             <td>{{$activity->grupo}}</td>
             <form action="{{route('destroyActivity', $activity->id)}}" method="post">
                 {{csrf_field()}}
                 {{method_field('delete')}}
                    <td><input class="btn-delete" type="submit"></td>
             </form>

         </tr>

         @endforeach

     </table>



    </body>

</html>