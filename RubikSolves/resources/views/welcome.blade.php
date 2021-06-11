
@extends('layouts.master')
    
@section('content')

    <div class="slider">
        <div class="w3-content w3-display-container">
            <div class="mySlides">
                <a href="{{ url('/resolucion') }}">
                    <img src="img/rubikslider1.jpg" style="width:100%">
                </a>
            </div>
            <div class="mySlides">
                <img src="img/rubikslider2.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <a href="{{ url('/notacion/2x2x2') }}">
                    <img src="img/rubikslider3.jpg" style="width:100%">
                </a>
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
    