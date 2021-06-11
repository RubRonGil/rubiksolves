
@extends('layouts.master')

    @section('content')
    
        <div class="seccionprincipal">
    
            <div class="fullBox">
                <div class="titulossection">
                    <p>TIEMPOS</p>
                </div>
                <div class="contenidoSeccion">

                    <div class="tabla">
                        <h2>Cubos del usuario:</h2>
                        <table class="table table-bordered">
                            <tr>
                              <th>Id</th>
                              <th>Cubo</th>
                              <th>Tipo</th>
                            </tr>
                            @foreach ($cubos as $cubo)
                                <tr>
                                    <td>{{ $cubo->id }}</td>
                                    <td>{{ $cubo->name }}</td>
                                    <td>{{ $cubo->tipo }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br><br>

                    <div class="card">
                        <div class="card-header">{{ __('Añadir cubo') }}</div>
                        <div class="card-body">
                            <form method="Post" action="{{ url('') }}">
                                @csrf <!--Token oculte para enviar post-->
                                <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ @Auth::user()->id }}" required autocomplete="id" autofocus>
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del cubo') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" required >
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de cubo') }}</label>
        
                                    <div class="col-md-6">
                                        <select name="tipo" id="tipo">
                                            <option value="1">2x2x2</option>
                                            <option value="2">3x3x3</option>
                                        </select>
                                    </div>
                                </div>
        
                            </form> 
                            <!-- El botón está fuera del formulario para que envie a la pag de mantenimiento -->
                            <a href="{{ url('mantenimiento') }}">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="hidden" class="btn btn-primary">
                                            {{ __('Agregar cubo') }}
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <br><br>

                    <div class="tabla">
                        <h2>Tiempos del usuario</h2>
                        <table class="table table-bordered">
                            <tr>
                              <th>Id</th>
                              <th>Id Resolución</th>
                              <th>Cubo</th>
                              <th>Milisegundos</th>
                            </tr>
                            @foreach ($marks as $mark)
                                <tr>
                                    <td>{{ $mark->id }}</td>
                                    <td>{{ $mark->resolve_id }}</td>
                                    <td>{{ $mark->name }}</td>
                                    <td>{{ $mark->milisec }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br><br>

                    <div class="tabla">
                        <h2>Resoluciones del usuario</h2>
                        <table class="table table-bordered">
                            <tr>
                              <th>Id</th>
                              <th>Cubo</th>
                              <th>Media</th>
                            </tr>
                            @foreach ($resolves as $resolve)
                                <tr>
                                    <td>{{ $resolve->id }}</td>
                                    <td>{{ $resolve->name }}</td>
                                    <td>{{ $resolve->avg_time }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br><br>

                    <div class="card">
                        <div class="card-header">{{ __('Crear resolución') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tiempos.addResolve') }}">
                                @csrf <!--Token oculte para enviar post-->
                                <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ @Auth::user()->id }}" required autocomplete="id" autofocus>
                                
                                <div class="form-group row">
                                    <label for="user_cubes_id" class="col-md-4 col-form-label text-md-right">{{ __('Cubo de la resolución ') }}</label>
        
                                    <div class="col-md-6">
                                        <select name="user_cubes_id" id="user_cubes_id">
                                            @foreach ($cubos as $cubo)
                                                <option value="{{ $cubo->id }}">{{ $cubo->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                            </form>
                            <!-- El botón está fuera del formulario para que envie a la pag de mantenimiento -->
                            <a href="{{ url('mantenimiento') }}">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Agregar resolución') }}
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <br><br>

                    <div class="card">
                        <div class="card-header">{{ __('Añadir marca') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tiempos.addMark') }}">
                                @csrf <!--Token oculte para enviar post-->
                                <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ @Auth::user()->id }}" required autocomplete="id" autofocus>
                                
                                <div class="form-group row">
                                    <label for="milisec" class="col-md-4 col-form-label text-md-right">{{ __('Milisegundos') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="milisec" type="milisec" class="form-control @error('milisec') is-invalid @enderror" name="milisec" required >
        
                                        @error('milisec')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="resolve_id" class="col-md-4 col-form-label text-md-right">{{ __('Resolución') }}</label>
        
                                    <div class="col-md-6">
                                        <select name="resolve_id" id="resolve_id">
                                            @foreach ($resolves as $resolve)
                                                <option value="{{ $resolve->id }}">{{ $resolve->id }} - {{ $resolve->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                            </form>
                            <!-- El botón está fuera del formulario para que envie a la pag de mantenimiento -->
                            <a href="{{ url('mantenimiento') }}">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Agregar cubo') }}
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'user_cubes/userCubes',
                    method: 'POST',
                    data:{
                        id:1
                    }
                }).done(function(res){
                    alert(res);
                });

            });
        </script>
    @endsection