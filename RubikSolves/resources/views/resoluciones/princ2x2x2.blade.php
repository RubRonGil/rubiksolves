
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <h1>GUIA DEL CUBO 2x2x2 - MÉTODO PRINCIPIANTES</h1>
                    <div class="txtIzq">
                        <P><img src="{{ asset('img/resolucion/2x2x2/final.png') }}" alt="Cubo resuelto"> Con esta guía aprenderas a resolver el cubo 2x2x2 de la manera más fácil posible. No es complicado de aprender, pero requiere concentración, memoria y visión espacial.</P>
                        <p>La resolución del método principiantes del cubo 2x2x2 consta de 3 pasos:</p>
                        <ul>
                            <li><b>Primer paso: </b>Resolver la primera capa del cubo</li>
                            <li><b>Segundo paso: </b>Orientar la segunda capa</li>
                            <li><b>Tercer paso: </b>Permutar las piezas de la segunda capa</li>
                        </ul>
                        <div>
                            <div>
                                <img src="{{ asset('img/resolucion/2x2x2/desecho.png') }}" alt="Caras del cubo">
                                <p>Cubo desecho</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/2x2x2/primer_pas.png') }}" alt="Caras del cubo">
                                <p>Primer paso</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/2x2x2/segun_pas.png') }}" alt="Caras del cubo">
                                <p>Segundo paso</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/2x2x2/terc_pas.png') }}" alt="Caras del cubo">
                                <p>Tercer paso</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>PRIMER PASO</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/2x2x2/primer_pas_objetivo.png') }}" alt="Cruz"></p>
                        <p>En este primer paso tendremos que conseguir resolver la primera capa del cubo, tal como vemos en la imágenes. No bastará con que toda una cara sea del mismo color, sino, que los colores del lateral de la pieza también deberán coincidir.</p>
                        <p>En esta guía empezaremos por la capa blanca, por eso lo primero que tenemos que hacer es escoger una de las esquinas que tenga color blanco, orientar el cubo de manera que el blanco mire hacia arriba y hacer que esta esquina esté en la parte superior izquierda de la cara frontal.</p>
                        <p>Una vez tengamos la pieza localizada y el cubo orientado, tenemos que buscar la esquina que va a su lado i colocarla de manera que quede debajo de su posición correcta.</p>
                        <p>Debemos repetir el mismo procedimiento con todas las esquinas que tengan color blanco para conseguir el objetivo de este primer paso.</p>
                        <p>Podemos encontrarnos 4 situaciones distintas para colocar la esquina en su lugar:</p>

                        <h2>Primera situación:</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/1_prim_situacion.png') }}" alt="Primera situación"> Con las dos esquinas colocadas y el cubo orientado correctamente, el color blanco de la esquina a colocar queda en la cara frontal.</p>
                        <p>Los movimientos que tenemos que realizar en este caso son los siguientes:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>

                        <h2>Segunda situación:</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/1_seg_situacion.png') }}" alt="Segunda situación"> Con las dos esquinas colocadas i el cubo orientado correctamente, el color blanco de la esquina a colocar mira hacia la derecha.</p>
                        <p>Los movimientos que tenemos que realizar en este caso son los siguientes:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>

                        <h2>Tercera situación:</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/1_ter_situacion.png') }}" alt="Tercera situación"> Con las dos esquinas colocadas y el cubo orientado correctamente, el color blanco de la esquina a colocar mira hacia abajo.</p>
                        <p>Los movimientos que tenemos que realizar en este caso son los siguientes:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D\'.png') }}" alt="D\'">
                                <p>2 D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                        </div>

                        <h2>Cuarta situación:</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/1_cuart_situacion.png') }}" alt="Cuarta situación"> La esquina está en el lugar correcto pero no está bien orientada y los colores de la esquina no coinciden con los colores de las otras esquinas.</p>
                        <p>Repetiremos el siguiente algoritmo hasta que la esquina esté correctamente orientada. Repetiremos el algoritmo 2 o 4 veces dependiendo de hacia donde esté mirando el color blanco de la esquina.</p>
                        <p>En el caso de la imagen, como el blanco está en la cara frontal, el algoritmo lo haremos 4 veces.</p>
                        <p>Los movimientos que tenemos que realizar en este caso son los siguientes:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/D\'.png') }}" alt="D\'">
                                <p>2 D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- SEGUNDO PASO -->
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>SEGUNDO PASO</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/2x2x2/seg_pas_objetivo.png') }}" alt="Segundo paso objetivo"></p>
                        <p>En este segundo paso, primero daremos la vuelta al cubo, de esta manera la cara blanca quedará mirando hacia abajo.</p>
                        <p>El objetivo es conseguir que todas las esquinas de la segunda capa, que ahora nos queda en la parte superior, queden bien orientadas, o sea, con el color amarillo mirando hacia arriba.</p>
                        <p>En este paso solo usaremos un único algoritmo, pero puede que tengamos que repetir-lo varias veces.</p>
                        <p>Primero orientamos el cubo correctamente y después realizar el algoritmo anotado debajo. Si la cara amarilla no queda completada, volveremos a orientar el cubo i repetiremos el algoritmo. Puede que tengamos que repetir el algoritmo mas de 3 veces.</p>
                        <h2>Como orientar el cubo</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/2_caso_1.png') }}" alt="Caso 1 del segundo paso"> <b>Caso 1:</b></p>
                        <p>Si solo una de las esquinas tiene el color amarillo mirando hacia arriba, orientamos el cubo de manera que esta esquina quede en la parte superior izquierda de la cara frontal, tal como ves en al imagen. Después, realiza el algoritmo.</p>
                        <p><img src="{{ asset('img/resolucion/2x2x2/2_caso_2_1.png') }}" alt="Caso 2.1 del segundo paso"><img src="{{ asset('img/resolucion/2x2x2/2_caso_2_2.png') }}" alt="Caso 2.1 del segundo paso"> <b>Caso 2: </b></p>
                        <p>En caso contrario, si ninguna o mas de una esquina tiene el color amarillo mirando hacia arriba, orientamos el cubo de manera que la pieza de la parte superior izquierda de la cara frontal tenga el color amarillo en la cara izquierda</p>
                        <p>Podemos mover libremente la capa superior del cubo para buscar una de las dos situaciones comentadas.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


<!-- TERCER PASO -->
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>TERCER PASO</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/2x2x2/terc_pas.png') }}" alt="Tercer paso objetivo"></p>
                        <p>En este último paso, realizaremos el algoritmo anotado debajo, 2 veces como mucho. </p>
                        <h2>Como orientar el cubo</h2>
                        <p><img src="{{ asset('img/resolucion/2x2x2/tercer_pas_1.png') }}" alt="Caso 1 del tercer paso"> <b>Caso 1:</b></p>
                        <p>Girando la capa superior tenemos que conseguir resolver una de las caras laterales (verde, naranja, roja o azul). Esta cara resuelta tenemos que colocarla en la parte posterior del cubo, con la cara amarilla en la parte superior i la blanca en la inferior.</p>
                        <p>En la imagen de ejemplo podemos ver como la cara azul queda completamente resuelta, esta cara es la que tenemos que colocar en la parte posterior para realizar el algoritmo.</p>
                        <p><b>Caso 2: </b>Puede pasar que moviendo la cara superior no conseguimos que una de las caras laterales quede completamente resuelta, en este caso, debemos realizar el algoritmo con la cara amarilla en la parte superior i la blanca en la inferior, usando como cara frontal cualquiera de las caras laterales. Una vez realizado el algoritmo podemos pasar al caso 1.</p>
                        <p>Podemos mover libremente la capa superior del cubo para buscar una de las dos situaciones comentadas.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/B.png') }}" alt="B">
                                <p>2B</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>R</p>
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
                                <img src="{{ asset('img/notacion/2x2x2/B.png') }}" alt="B">
                                <p>2B</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/2x2x2/R.png') }}" alt="R">
                                <p>2R</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection