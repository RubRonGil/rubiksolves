
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="contenidoSeccion">
                    <h1>GUÍA DEL CUBO 3X3X3 - MÉTODO PRINCIPIANTES</h1>
                    <div class="txtIzq">
                        <P><img src="{{ asset('img/resolucion/3x3x3/resuelto.png') }}" alt="Cubo resuelto"> Con esta guía aprendas a resolver el cubo de Rubik clásico. No es muy complicado de aprender, pero requiere concentración, memoria y visión espacial.</P>
                        <p>El cubo lo resolveremos por capas, que son 3, la resolución de cada capa tiene sus pasos que suman un total de 7.</p>
                        <ol>
                            <li>
                                <b>Primera capa: </b>
                                <ul>
                                    <li><b>Cruz: </b>Resolución de las aristas de la primera capa.</li>
                                    <li><b>Esquinas: </b>Resolución de las esquinas de la primera capa.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Segunda capa: </b>
                                <ul>
                                    <li><b>Aristas: </b>Resolución de las aristas de la segunda capa.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Tercera capa: </b>
                                <ul>
                                    <li><b>Orientación de aristas: </b>Orientación correcta de las aristas de la tercera capa.</li>
                                    <li><b>Permutación de aristas: </b>Colocación de las aristas en su lugar correspondiente.</li>
                                    <li><b>Permutación de esquinas: </b>Colocación de las esquinas de la tercera capa en su lugar correspondiente.</li>
                                    <li><b>Orientación de esquinas: </b>Orientación de las esquinas de la tercera capa.</li>
                                </ul>
                            </li>
                        </ol>
                        <div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/desecho.png') }}" alt="Caras del cubo">
                                <p>Cubo desecho</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/cruz.png') }}" alt="Caras del cubo">
                                <p>Cruz</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/esquinas.png') }}" alt="Caras del cubo">
                                <p>Esquinas</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/2_capa.png') }}" alt="Caras del cubo">
                                <p>Segunda capa terminada</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/3_capa_aristas.png') }}" alt="Caras del cubo">
                                <p>Aristas tercera capa</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/3_capa_esquinas.png') }}" alt="Caras del cubo">
                                <p>Esquinas tercera capa</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/3_capa.png') }}" alt="Caras del cubo">
                                <p>Tercera capa terminada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                    <h2>PRIMERA CAPA</h2>
                        <p>En esta primera capa hay dos pasos, primero colocar las aristas para realizar la cruz y posteriormente las esquinas para completar la primera capa entera.</p>
                        <h2>Primer paso: La cruz</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/3x3x3/capa_1_cruz.png') }}" alt="Cruz"></p>
                        <p>En esta primer paso realizaremos la cruz, fíjate bien, no basta con la cruz blanca, el color lateral de las aristas tienen que coincidir con el color de la pieza central de las caras laterales. En la imagen puedes ver que la arista blanca y roja coincide con el centro blanca y también con el centro rojo, lo mismo pasa con la arista blanca y azul.</p>
                        <p>Para realizar la cruz el mejor método es la lógica. De todas maneras te daré unas indicaciones para guiarte un poco.</p>

                        <ol>
                            <li>Primero orientaremos el cubo de manera que el centro blanco mire hacia arriba. Hasta que terminemos las dos primeras capas el centro blanco lo dejaremos mirando hacia arriba.</li>
                            <li>Ahora buscamos una arista que contenga el color blanco.</li>
                            <li>Una vez localizada, buscamos su lugar correcto.</li>
                            <li>Para terminar, sin perder la orientación del cubo y usando la lógica, colocamos la arista en su lugar moviendo las diferentes capas del cubo.</li>
                        </ol>
                        <p>Vigila si ya tenemos alguna arista colocada, puede que sea necesario apartarla un momento, si se da el caso, tenemos que devolverla a su sitio.</p>





                        <h2>Segundo paso: Esquinas</h2>
                        <p><b>OBJETIVO: </b><img src="{{ asset('img/resolucion/3x3x3/1_capa_esquinas.png') }}" alt="Esquinas de la primera capa"></p>
                        <p>En este segundo paso completaremos la primera capa, para realizarlo tendremos que colocar las esquinas de la primera capa en su lugar.</p>
                        <p>Como en el paso anterior primero buscamos la pieza que queramos colocar, buscar su lugar y finalmente colocar la pieza. En este caso lo haremos con las esquinas.</p>
                        <p>Moviendo la capa inferior del cubo tenemos que conseguir poner la esquina debajo de su lugar correspondiente, y orientar el cubo de manera que el blanco de la esquina esté en la cara frontal y el centro blanco en la cara superior. Si no es posible, es porque la esquina está en la capa superior o que el blanco está mirando hacia abajo. Estas situaciones corresponden al caso 1 y al caso 4.</p>
                        <p>Nos encontraremos con 4 situaciones distintas para colocar la esquina en su lugar.</p>
                        <p><b>Caso 1: </b>
                        <img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_1_1.png') }}" alt="Caso 1 esquinas">
                        <img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_1_2.png') }}" alt="Caso 2 esquinas">
                        <img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_1_3.png') }}" alt="Caso 3 esquinas"></p>
                        <p>La esquina a colocar, se encuentra en la capa superior del cubo. Para resolver esta situación, primero quitaremos la esquina de la capa superior para que quede en la capa inferior.</p>
                        <p>Orientamos el cubo de manera que el centro blanco mira hacia arriba y la esquina que queremos quitar de la capa superior quede en la parte superior derecha de la cara frontal, tal como vemos en la imagen. Posteriormente realizamos el algoritmo siguiente:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>
                        <p>Ahora ya podemos mover la capa inferior hasta que la esquina quede debajo de lugar que le corresponde.</p>

                        <p><b>Caso 2: </b><img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_2.png') }}" alt="Capa 1 caso 2"></p>
                        <p>En este caso, la esquina a colocar queda en la parte inferior derecha de la cara frontal. Para resolver esta situación realizamos el algoritmos siguiente.</p>
                        <p>Te aconsejo que intentes ver la lógica al algoritmo, de esta manera te será mas fácil de recordar y entender como se resuelve el cubo.</p>
                        <p>Fijate que lo que conseguimos con el algoritmo es, apartar la esquina a colocar, bajar la capa derecha, colocar la esquina y finalmente devolver a su sitio la capa derecha.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>

                        <p><b>Caso 3: </b><img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_3.png') }}" alt="Capa 1 caso 3"></p>
                        <p>En esta caso, la esquina a colocar queda en la parte inferior izquierda de la cara frontal. Para resolver esta situación realizamos el siguiente algoritmo.</p>
                        <p>Este caso es como el caso 2 pero al revés.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                        </div>

                        <p><b>Caso 4: </b><img src="{{ asset('img/resolucion/3x3x3/capa_1_cas_4.png') }}" alt="Capa 1 caso 4"></p>
                        <p>Este último caso se da cuando el blanco de la esquina a colocar mira hacia abajo. Tenemos que orientar el cubo de manera que la esquina a colocar quede en la parte inferior derecha de la cara frontal y realizar el algoritmo siguiente:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>2D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                    <h2>SEGUNDA CAPA</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/3x3x3/capa_2_objetivo.png') }}" alt="Capa 2 objetivo"></p>
                        <p>El procedimiento a seguir para colocar las aristas es el siguiente:</p>
                        <ol>
                            <li>Buscamos en la capa inferior una arista que no tenga color amarillo, las aristas que tengan color amarillo corresponden a la ultima capa y ahira no nos interesan.</li>
                            <li>Moviendo la capa inferior hacemos coincidir el color lateral de la arista con el centro del mismo color, nos quedará una forma de T.</li>
                            <li>Ahora, nos fijamos si esta arista va colocada a su derecha o a su izquierda, dependiendo de donde vaia usaremos un algoritmo o otro.</li>
                        </ol>
                        <p><b>Caso 1: </b><img src="{{ asset('img/resolucion/3x3x3/T_dreta.png') }}" alt="Caso 1 T"></p>
                        <p>La arista va a su derecha. Mirando la T de cara realizamos el siguiente algoritmo:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F\'.png') }}" alt="F\'">
                                <p>F'</p>
                            </div>
                        </div>
                        <p><b>Caso 2: </b><img src="{{ asset('img/resolucion/3x3x3/T_izq.png') }}" alt="Capa 2 T"></p>
                        <p>La arista va a su izquierda. Mirando la T de cara realizamos el siguiente algoritmo:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F\'.png') }}" alt="F\'">
                                <p>F'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                        </div>

                        <p><b>Caso 3:</b></p>
                        <p>Nos podemos encontrar que en la capa inferior no haya ninguna arista que no tenga color amarillo y que la segunda capa no esté resuelta. Esto pasa cuando todas las aristas sin color amarillo están colocadas en la segunda capa pero no de manera correcta.</p>
                        <p>Para solucionarlo simplemente colocamos cualquier arista que tenga color amarillo en el lugar de una de las aristas que queremos colocar correctamente. Una vez realizado, la arista sin color amarillo quedará en la capa inferior del cubo para poder continuar.</p>
                        <p>Una vez todas las aristas estén colocadas tendremos la segunda capa completada.</p>
                    </div>
                </div>
            </div>

            <div class="fullBox">
                <div class="contenidoSeccion">
                    <div class="txtIzq">
                        <h2>TERCERA CAPA</h2>
                        <p>Solo nos queda la última capa, para poder completarla tendremos que seguir los siguientes 4 pasos.</p>
                        <h2>PRIMER PASO: ORIENTACIÓN DE LAS ARISTAS, CRUZ SUPERIOR</h2>
                        <p><b>OBJECTIVO:</b> <img src="{{ asset('img/resolucion/3x3x3/capa_3_cruz.png') }}" alt="Capa 3 cruz"><img src="{{ asset('img/resolucion/3x3x3/capa_3_cruz_top.png') }}" alt="Capa 3 cruz superior"></p>
                        <p>El objetivo de este paso es conseguir realizar la cruz amarilla, esta vez sin tener en cuenta si el color lateral de la arista coincide con el centro lateral.</p>
                        <p>Primero giramos el cubo de manera que el centro amarillo mire hacia arriba, a partir de ahora miraremos el cubo con esta orientación hasta terminarlo.</p>
                        <p>El cubo puede quedarnos en cualquiera de las 4 fases que se muestran en las imágenes, si tenemos suerte la cruz amarilla quedará resuelta y podremos pasar al siguiente paso. El algoritmo nos permitirá avanzar fases hasta resolver la cruz.</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/cruz_1.png') }}" alt="Cruz 1">
                                <p>1</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/cruz_2.png') }}" alt="Cruz 2">
                                <p>2</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/cruz_3.png') }}" alt="Cruz 3">
                                <p>3</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/resolucion/3x3x3/cruz_4.png') }}" alt="Cruz 4">
                                <p>4</p>
                            </div>
                        </div>
                        <p>Las imágenes muestran la orientación correcta para realizar el algoritmo, con la cara amarilla como cara superior, cada vez que realicemos el algoritmo avanzaremos a la fase siguiente.</p>
                        <p>Por ejemplo, si nos queda el punto, realizaremos el algoritmo y pasaremos a tener la línea, volveremos a realizar el algoritmo y pasaremos a la L, por último volveremos a realizar el algoritmo y ya tendremos la cruz resuelta.</p>
                        <p>El algoritmo es el siguiente:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F.png') }}" alt="F">
                                <p>F</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/F\'.png') }}" alt="F\'">
                                <p>F'</p>
                            </div>
                        </div>
                        <h2>TERCER PASO: PERMUTACIÓN DE LAS ESQUINAS</h2>
                        <p><b>OBJETIVO: </b><img src="{{ asset('img/resolucion/3x3x3/capa_3_objetivo.png') }}" alt="Capa 3 objetivo"></p>
                        <p>En este paso tenemos que conseguir colocar las esquinas en su lugar correcto, vigila, no hace falta que estén bien orientadas, simplemente tienen que estar en el lugar que les corresponde.</p>
                        <p>En la imagen de el objetivo podemos ver un ejemplo, todas las esquinas están en su lugar, pero no todas están bien orientadas. Por ejemplo, la esquina amarilla, roja y azul, está en su lugar pero no está bien orientada, faltaría rotarla en sentido horario para que esté bien orientada.</p>
                        <p><img src="{{ asset('img/resolucion/3x3x3/capa_3_rotacion.png') }}" alt="Rotación capa 3"> Para conseguirlo usaremos un algoritmo que intercambia la posición de 3 esquinas en sentido antihorario.</p>
                        <p>Nos podemos encontrar tres casos distintos:</p>
                        <p><b>Caso 1:</b></p>
                        <p>Todas las esquinas están en su lugar correcto, hemos tenido suerte podemos pasar al paso siguiente.</p>
                        <p><b>Caso 2:</b></p>
                        <p>Ninguna de las esquinas está en su lugar. En este caso realizamos el algoritmo usando como cara frontal cualquiera de las caras laterales del cubo y podrás pasar al caso 3.</p>
                        <p><b>Caso 3: </b><img src="{{ asset('img/resolucion/3x3x3/capa_3_caso_3.png') }}" alt="Capa 3 caso 3"> Una de las esquinas está en su lugar correcto.</p>
                        <p>En esta situación orientamos el cubo de manera que, como en los últimos pasos, el centro amarillo mira hacia arriba y la esquina quede en la parte superior derecha de al cara frontal. Una vez tengamos el cubo bien orientado ya podremos realizar el algoritmo, puede ser que tengamos que hacer el algoritmo dos veces para rotar las esquinas hasta su lugar correcto.</p>
                        <p>El algoritmo que usaremos es el siguiente:</p>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L\'.png') }}" alt="L\'">
                                <p>L'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U.png') }}" alt="U">
                                <p>U</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/U\'.png') }}" alt="U\'">
                                <p>U'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/L.png') }}" alt="L">
                                <p>L</p>
                            </div>
                        </div>
                        <h2>QUARTO PASO: ORIENTACIÓN DE LAS ESQUINAS</h2>
                        <p><b>OBJETIVO: </b><img src="{{ asset('img/resolucion/3x3x3/3_capa.png') }}" alt="Capa 3 resuelta"></p>
                        <p>Este es el último paso a realizar, tenemos que poner mucha atención ya que si nos perdemos tendremos que volver a empezar la resolución.</p>
                        <p>En este paso iremos orientando las esquinas que no están orientadas una a una, no te preocupes si parece que el cubo se deshace, si seguimos paso a paso las instrucciones el cubo acabará resuelto.</p>
                        <ol>
                            <li>Para orientar las esquinas primero orientaremos correctamente el cubo, con el centro amarillo mirando hacia arriba y una de las esquinas a orientar en la parte superior derecha de la cara frontal.</li>
                            <li>Una vez tengamos el cubo orientado, nos fijaremos en el color de la cara frontal y durante todo el paso no dejaremos de mirar esta cara.</li>
                            <li>Realizamos el algoritmo 2 o 4 veces hasta que veamos que la esquina esté bien orientada. Aparentemente el cubo se ha deshecho, pero no te preocupes es normal.</li>
                            <li>Sin perder la cara frontal que hemos empezado mirando, movemos la capa superior para colocar en la parte superior derecha la siguiente esquina a oriental.</li>
                            <li>Volvemos a realizar el algoritmo 2 o 4 veces hasta que la esquina quede bien oriendada.</li>
                            <li>Si aún nos quedan esquinas a orientar repetimos los pasos 4 y 5.</li>
                        </ol>
                        <div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D.png') }}" alt="D">
                                <p>D</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R\'.png') }}" alt="R\'">
                                <p>R'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/D\'.png') }}" alt="D\'">
                                <p>D'</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/notacion/3x3x3/R.png') }}" alt="R">
                                <p>R</p>
                            </div>
                            </div>
                        </div>
                        <div style="align-items: center; text-align: center;">
                            <h2>¡¡FELICIDADES, HAS RESUELTO EL CUBO DE RUBIK!!</h2>
                            <img src="{{ asset('img/resolucion/3x3x3/3_capa.png') }}" alt="Capa 3 resuelta">
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @endsection