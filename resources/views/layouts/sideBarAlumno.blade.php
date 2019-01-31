<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div id="toggle-sidebar">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="sidebar-brand">
                <a href="#">Plataforma de Tutorías</a>
            </div>
            <div class="sidebar-header">
                <!-- <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/bootstrap4/assets/img/user.jpg" alt="User picture">
                </div> -->
                <div class="user-info">
                        <span class="user-name">
                                {{--<strong>{{Auth::user()->alumno->nombres}}</strong>--}}
                        </span>
                    {{--<span class="user-role">{{Auth::user()->role->name}}</span>--}}
                    <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                </div>
            </div>
            <!-- sidebar-header  -->

            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <span>Menú</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{url('/panel_actividades')}}">
                            <i class="fas fa-book"></i>
                            <span>Actividades</span>
                            <span class="badge badge-pill badge-danger">New</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Dashboard 1
                                        <span class="badge badge-pill badge-success">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{url('/panel_actividades')}}">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Calificaciones</span>
                            <span class="badge badge-pill badge-primary">3</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Products

                                    </a>
                                </li>
                                <li>
                                    <a href="#">Orders</a>
                                </li>
                                <li>
                                    <a href="#">Credit cart</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{url('/reg_alumno')}}">
                            <i class="fas fa-envelope"></i>
                            <span>Mi perfil</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{url('/')}}">
                            <i class="fa fa-home"></i>
                            <span>Página de inicio</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Pie chart</a>
                                </li>
                                <li>
                                    <a href="#">Line chart</a>
                                </li>
                                <li>
                                    <a href="#">Bar chart</a>
                                </li>
                                <li>
                                    <a href="#">Histogram</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Cerrar sesión</span>
                        </a>



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Google maps</a>
                                </li>
                                <li>
                                    <a href="#">Open street map</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        {{--<div class="sidebar-footer">--}}
            {{--<a href="#">--}}
                {{--<i class="fa fa-bell"></i>--}}
                {{--<span class="badge badge-pill badge-warning notification">3</span>--}}
            {{--</a>--}}
            {{--<a href="#">--}}
                {{--<i class="fa fa-envelope"></i>--}}
                {{--<span class="badge badge-pill badge-success notification">7</span>--}}
            {{--</a>--}}
            {{--<a href="#">--}}
                {{--<i class="fa fa-cog"></i>--}}
                {{--<span class="badge-sonar"></span>--}}
            {{--</a>--}}
            {{--<a href="#">--}}
                {{--<i class="fa fa-power-off"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-md-12">

                    @yield('content')

                </div>
            </div>

            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    @yield('container')
                </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
</div>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<script src="b.js"></script>--}}

<script src="{{asset('js/libs.js')}}"></script>
@yield('scripts')
</body>

</html>