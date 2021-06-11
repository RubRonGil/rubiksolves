
@extends('layouts.master')
    
@section('content')

    <div class="slider">
        <div class="w3-content w3-display-container">
            <div class="mySlides">
                <img src="img/monopoly.jpg" style="width:100%">
                <div class="txtpeq">
                    ¿Estrategia?<br>¿suerte?
                </div>
            </div>
            <div class="mySlides">
                <img src="img/rubikslider.jpg" style="width:100%">
                <div class="txtizq">
                    Método<br>Fridrich<br>Rubik<br>3x3
                </div>
            </div>
            <div class="mySlides">
                <img src="img/consola.jpg" style="width:100%">
                <div class="txtcentro">
                    ¿Se consideran los videojuegos un  juego de mesa?
                </div>
            </div>
            
        
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>

    <div class="seccionprincipal">

        <div class="fullBox">
            <div class="titulossection">
                <p>RUBIK SOLVES</p>
            </div>
            <div class="contenidoSeccion">
                <p>
                    Gracias por visitar nuestra web. Aquí podrás encontrar el perfecto tutorial para principiantes en el mundo de los cubos de rubik y un recordatorio para los veteranos que olvidamos el algoritmo que necesitamos.
                    <br>
                    En esta web encontrarás:
                </p>
                <ul>
                    <li>Notación del cubo 2x2x2</li>
                    <li>Notación del cubo 2x2x2</li>
                    <li>Tutorial del método principiantes del cubo 2x2x2</li>
                    <li>Tutorial del método principiantes del cubo 3x3x3</li>
                </ul>
                <p>Además podrás registrar tus cubos, los tiempos que hagas con ellos y las resoluciones finales con sus medias.                </p>
            </div>
        </div>
    </div>
@endsection
    