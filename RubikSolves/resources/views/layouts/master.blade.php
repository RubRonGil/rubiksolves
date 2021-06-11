<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/1b8c47f05d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubiksolves</title>
</head>
<body>
    <header  class="colorCabecera">
        <div class="cabecera">
            <div>
                <a href="{{ url('/') }}"><img src="{{ asset('img/rubiksolves-logo.svg') }}" alt="Logo de la web" class="logo"></a>
            </div>
        </div>      
    </header>
    <main <?php //if($_COOKIE["oscuro"] == true {echo 'style="backgroud-color: black;"';}) ?>>
        <div class="colorNavegacion">
            <div class="divNavegacion">
                    <nav class="navegacion">
                        <ul>
                            <a href="{{ url('/') }}">
                                <li class="hovRed">
                                    INICIO
                                </li>
                            </a>
                            <a href="{{ url('/notacion') }}">
                                <li class="hovBlue">
                                    NOTACIÓN
                                    <ul>
                                        <a href="{{ url('/notacion/2x2x2') }}">
                                            <li class="hovBlue">2x2x2</li>
                                        </a>
                                        <a href="{{ url('/notacion/3x3x3') }}">
                                            <li class="hovBlue">3x3x3</li>
                                        </a>
                                    </ul>
                                </li>
                            </a>
                            <a href="{{ url('/resolucion') }}">
                                <li class="hovOrange">
                                    RESOLUCIÓN
                                    <ul>
                                        <a href="{{ url('/resolucion/2x2x2') }}">
                                            <li class="hovOrange">2x2x2</li>
                                        </a>
                                        <a href="{{ url('/resolucion/3x3x3') }}">
                                            <li class="hovOrange">3x3x3</li>
                                        </a>
                                    </ul>
                                </li>
                            </a>
                            <a href="{{ url('/tiempos') }}">
                                <li class="hovGreen">
                                    TIEMPOS
                                </li>
                            </a>
                                
                        
                                <li class="hovYell">
                                        <i class="fas fa-user-circle"></i>
                                    <ul>
                                        @if(!@Auth::user()) <!-- Si no estámos logeados saldrá el icono para iniciar sesión, si lo estamos, el de salir -->
                                            <a href="{{ route('login') }}">
                                                <li class="hovYell"><i class="fas fa-sign-in-alt"></i></li>
                                            </a>
                                        @else
                                            <a href="{{ url('/perfil') }}">
                                                <li class="hovYell">
                                                    <i class="fas fa-user-edit"></i>
                                                </li>
                                            </a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <li class="hovYell">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                </li>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                    </ul>
                                </li>

                                <!-- Si tienes el rol de usuario te saldrá el panel para modificar los permisos y roles del usuario -->
                                @if(@Auth::user())
                                    @if(@Auth::user()->hasPermissionTo('role-list'))
                                    <li class="hovRed">
                                        <i class="fas fa-toolbox"></i>
                                        <ul>
                                            <a href="{{ url('/users') }}">
                                                <li class="hovRed">
                                                    <i class="fas fa-users-cog"></i>
                                                </li>
                                            </a>
                                            <a href="{{ url('/roles') }}">
                                                <li class="hovRed">
                                                    <i class="fas fa-user-tag"></i>
                                                </li>
                                            </a>
                                        </ul>
                                    </li>
                                    @endif
                                @endif


                            <abbr title="Modo oscuro">
                                <li onclick="oscuro()" class="hovWh">
                                    <i class="fas fa-moon"></i>
                                </li>
                            </abbr>
                        </ul>
                    </nav>
            </div>
        </div>
        <div class="respmenu">
            <input type="checkbox">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
            <nav>
                <ul>
                <a class="hovRed" href="{{ url('/') }}">
                    <li>
                        INICIO
                    </li>
                </a>
                <a class="hovBlue" href="{{ url('/notacion') }}">
                    <li>
                    NOTACIÓN
                    </li>
                </a>
                <a class="hovOrange" href="{{ url('/resolucion') }}">
                    <li class="hovOrange">
                        RESOLUCIÓN
                    </li>
                </a>
                <a class="hovGreen" href="{{ url('/tiempos') }}">
                    <li class="hovGreen">
                        TIEMPOS
                    </li>
                </a>
                <li class="hovYell">
                    
                    @if(!@Auth::user()) <!-- Si no estámos logeados saldrá el icono para iniciar sesión, si lo estamos, el de salir -->
                        <a href="{{ route('login') }}">
                            <li class="hovYell"><i class="fas fa-sign-in-alt"></i></li>
                        </a>
                    @else
                        <a href="{{ url('/perfil') }}">
                            <li class="hovYell">
                                <i class="fas fa-user-edit"></i>
                            </li>
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <li class="hovYell">
                                <i class="fas fa-sign-out-alt"></i>
                            </li>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif
                    
                </li>

            <!-- Si tienes el rol de usuario te saldrá el panel para modificar los permisos y roles del usuario -->
            @if(@Auth::user())
                @if(@Auth::user()->hasPermissionTo('role-list'))
                <li class="hovRed">
                        <a href="{{ url('/users') }}">
                            <li class="hovRed">
                                <i class="fas fa-users-cog"></i>
                            </li>
                        </a>
                        <a href="{{ url('/roles') }}">
                            <li class="hovRed">
                                <i class="fas fa-user-tag"></i>
                            </li>
                        </a>
                </li>
                @endif
            @endif
                <abbr title="Modo oscuro">
                    <li onclick="oscuro()" class="hovWh">
                        <i class="fas fa-moon"  id="lunahamburguesa"></i>
                    </li>
                </abbr>
                </ul>
            </nav>
        </div>
        <div class="margenes">
            @yield('content')
        </div>
    </main>
    <footer class="pie">
        <div class="flexfooter">
            <div class="footerelement">
                <a href="index.html"><img src="{{ asset('img/rubiksolves-logo.svg') }}" alt="Logo de la web" class="logo"></a>
            </div>
            <div class="footerelement">
                <ul>
                    <li><h2>MENÚ LEGAL</h2></li>
                    <li>Aviso legal</li>
                    <li>Condiciones de uso</li>
                    <li>Mantenimiento</li>
                    <li>Cookies</li>
                </ul>
            </div><div class="footerelement">
                <ul>
                    <li><h2>ENLACES DE INTERES</h2></li>
                    <li>Preguntas frecuentes</li>
                    <li>Contacta con nosotros</li>
                    <li>Soporte Técnico</li>
                    <li>Donaciones</li>
                </ul>
            </div><div class="footerelement">
                <ul>
                    <li><h2>REDES SOCIALES</h2></li>
                    <li>Facebook</li>
                    <li>Instagram</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('script')
</body>
</html>