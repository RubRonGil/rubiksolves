
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="titulossection">
                    <p>GUÍA DE RESOLUCIONES</p>
                </div>
                <div class="contenidoSeccion">
                    <div class="contenedorTarjetas">
                        <a href="{{ url('/resolucion/2x2x2') }}">
                            <div class="tarjeta">
                                <p>Método principiantes 2x2x2</p>
                                <img src="img/resolucion/princ_2x2x2.png" alt="Método principiantes del cubo 2x2x2">
                            </div>
                        </a>
                        <a href="{{ url('/resolucion/3x3x3/') }}">
                            <div class="tarjeta">
                                <p>Método principiantes 3x3x3</p>
                                <img src="img/resolucion/princ_3x3x3.png" alt="Método principiantes del cubo 3x3x3">
                            </div>
                        </a>
                        <!--<a href="{{ url('/notacion/3x3x3/fridich') }}">
                            <div class="tarjeta">
                                <p>Método Fridich 3x3x3</p>
                                <img src="img/resolucion/fridich_3x3x3.png" alt="Método Fridich del cubo 3x3x3">
                            </div>
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    @endsection