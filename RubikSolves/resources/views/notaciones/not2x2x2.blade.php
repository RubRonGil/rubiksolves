
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <h1>EL CUBO 2x2x2 - PIEZAS Y NOTACIÓN</h1>
                    <div class="txtIzq">
                        <h2>LAS PIEZAS</h2>
                        <P><img src="{{ asset('img/notacion/2x2x2/cub2x2x2.png') }}" alt="Cubo"> Para poder resolver el cubo tenemos que conocerlo un poco. El cubo tiene 8 piezas y todas son del mismo tipo... ¡Esquinas!</P>
                        <h2>ESQUINAS</h2>
                        <p><img src="{{ asset('img/notacion/2x2x2/esquinas.png') }}" alt="Esquinas"> Estas 8 piezas que forman el cubo son esquinas. Todas las piezas tienen la misma forma y todas tienen 3 colores.</p>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>NOTACIÓN DEL CUBO 2X2X2</h2>
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
                            <img src="{{ asset('img/notacion/cub_notacion_2x2x2.png') }}" alt="Caras del cubo" style="width: 250px !important;">
                        </div>
                        <P>Movimientos horarios:</P>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/B.png') }}" alt="B">
                                <p>B</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                        </div>
                        <p>Movimientos antihorarios:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/F\'.png') }}" alt="F\'">
                                <p>F'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/B\'.png') }}" alt="B\'">
                                <p>B'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                        </div>
                        <p>Se pueden indicar movimientos dobles de una capa usando el número 2 después de la letra (como por ejemplo 2L). El sentido del giro es irrelevante, ya que, el resultado será el mismo si giramos la capa en sentido horario o si la giramos en sentido antihorario.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection