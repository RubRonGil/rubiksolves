
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <h1>EL CUBO 3x3x3 - PIEZAS Y NOTACIÓN</h1>
                    <div class="txtIzq">
                        <h2>LAS PIEZAS</h2>
                        <P><img src="{{ asset('img/notacion/3x3x3/cub3x3x3.png') }}" alt="Cubo"> Para poder resolver el cubo tenemos que conocerlo un poco. EL cubo tiene 26 piezas de 3 tipos distintos:</P>
                        <h2>CENTROS</h2>
                        <p><img src="{{ asset('img/notacion/3x3x3/cent3x3x3.png') }}" alt="Esquinas"> 6 centros, son las piezas que solo tienen 1 color. Los centros nunca cambian de sitio y están distribuidos de la misma forma.</p>
                        <h2>ARISTAS</h2>
                        <p><img src="{{ asset('img/notacion/3x3x3/arist3x3x3.png') }}" alt="Esquinas"> 12 aristas, son las piezas que tienen 2 colores diferentes.</p>
                        <h2>ESQUINAS</h2>
                        <p><img src="{{ asset('img/notacion/3x3x3/esq3x3x3.png') }}" alt="Esquinas"> 8 esquinas. Las esquinas tienen 3 colores distintos.</p>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>NOTACIÓN DEL CUBO 3x3x3</h2>
                        <p>Para poder leer y escribir series de movimientos se usa la siguiente notación:</p>
                        <p>El cubo tiene 6 caras, a cada cara se le asigna una letra distinta, esta letra hace referencia a la cara del cubo que estamos viendo.
                            Esta letra significa que haremos un giro en sentido horario sobre la cara que nos indica la letra.</p>
                        <p>Además de estas letras puede aparecer el signo ' (como por ejemplo F'), este símbolo significa que el giro se hará en sentido antihorario.
                             Al principio puede resultar un poco lioso, pero a medida que vayas utilizando estas notaciones te resultará más sencillo.</p>
                        <ul>
                            <li><b>F: </b>Front - Frontral</li>
                            <li><b>U: </b>Up - Superior</li>
                            <li><b>D: </b>Down - Inferior</li>
                            <li><b>R: </b>Right - Derecha</li>
                            <li><b>L: </b>Left - Izquierda</li>
                            <li><b>B: </b>Back - Posterior</li>
                        </ul>
                        <div>
                            <img src="{{ asset('img/notacion/cub_notacion_3x3x3.png') }}" alt="Caras del cubo" style="width: 250px !important;">
                        </div>
                        <h2>CAPAS LATERALES</h2>
                        <P>Movimientos horarios:</P>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/B.png') }}" alt="B">
                                <p>B</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                        </div>
                        <p>Movimientos antihorarios:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F\'.png') }}" alt="F\'">
                                <p>F'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/B\'.png') }}" alt="B\'">
                                <p>B'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                        </div>
                        <h2>CAPAS CENTRALES</h2>
                        <p>Movimientos antihorarios:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/M.png') }}" alt="M">
                                <p>M</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/M\'.png') }}" alt="M\'">
                                <p>M'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/E.png') }}" alt="E">
                                <p>E</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/E\'.png') }}" alt="E\'">
                                <p>E'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/S.png') }}" alt="S">
                                <p>S</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/S\'.png') }}" alt="S\'">
                                <p>S'</p>
                            </div>
                        </div>
                        <h2>MOVIMIENTOS DE DOS CAPAS</h2>
                        <p>También hay movimientos de rotación de 2 capas, se representan poniendo la letra en minúscula o poniendo una w posterior. Como por ejemplo:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Uw.png') }}" alt="Uw">
                                <p>u</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Dw\'.png') }}" alt="Dw\'">
                                <p>d'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Lw.png') }}" alt="Lw">
                                <p>Lw</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Lw\'.png') }}" alt="Lw\'">
                                <p>Lw'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/S.png') }}" alt="S">
                                <p>S</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/S\'.png') }}" alt="S\'">
                                <p>S'</p>
                            </div>
                        </div>

                        <h2>MOVIMIENTOS DE ROTACIÓN DEL CUBO</h2>
                        <p>También hay notación que indica giros del cubo completo para cambiar la cara frontal.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/X.png') }}" alt="X">
                                <p>X</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/X\'.png') }}" alt="X\'">
                                <p>X'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Y.png') }}" alt="Y">
                                <p>Y</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Y\'.png') }}" alt="Y\'">
                                <p>Y'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Z.png') }}" alt="Z">
                                <p>Z</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/Z\'.png') }}" alt="Z\'">
                                <p>Z'</p>
                            </div>
                        </div>
                        <h2>MOVIMIENTOS DOBLES</h2>
                        <p>Se pueden indicar movimientos dobles de una capa usando el número 2 después de la letra (como por ejemplo 2L). El sentido del giro es irrelevante, ya que, el resultado será el mismo si giramos la capa en sentido horario o si la giramos en sentido antihorario.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection