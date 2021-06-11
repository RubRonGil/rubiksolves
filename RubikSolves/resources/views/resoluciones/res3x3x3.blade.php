
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="titulossection">
                    <p>GUÍAS DEL CUBO 3X3X3</p>
                </div>
                <div class="contenidoSeccion">
                    <div class="contenidoSeccion">
                        <div class="contenedorTarjetas">
                            <a href="{{ url('/resolucion/3x3x3/principiantes') }}">
                                <div class="tarjeta">
                                    <p>Método principiantes</p>
                                    <img src="{{ asset('img/notacion/cub_notacion_2x2x2.png') }}" alt="Notaciones del cubo 2x2x2">
                                </div>
                            </a>
                            <a href="{{ url('/resolucion/3x3x3/fridich') }}">
                                <div class="tarjeta">
                                    <p>Método Fridich reducido</p>
                                    <img src="{{ asset('img/notacion/cub_notacion_3x3x3.png') }}" alt="Notaciones del cubo 3x3x3">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection