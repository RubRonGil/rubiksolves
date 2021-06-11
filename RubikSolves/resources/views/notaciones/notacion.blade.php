
@extends('layouts.master')
    
    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="titulossection">
                    <p>NOTACIONES</p>
                </div>
                <div class="contenidoSeccion">
                    <div class="contenidoSeccion">
                        <div class="contenedorTarjetas">
                            <a href="{{ url('/notacion/2x2x2') }}">
                                <div class="tarjeta">
                                    <p>Notación del cubo 2x2x2</p>
                                    <img src="{{ asset('img/notacion/cub_notacion_2x2x2.png') }}" alt="Notaciones del cubo 2x2x2">
                                </div>
                            </a>
                            <a href="{{ url('/notacion/3x3x3') }}">
                                <div class="tarjeta">
                                    <p>Notación del cubo 3x3x3</p>
                                    <img src="{{ asset('img/notacion/cub_notacion_3x3x3.png') }}" alt="Notaciones del cubo 3x3x3">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection