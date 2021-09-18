@extends('master')


<link rel="stylesheet" href="{{ asset('/css/estilos_juegos.css') }}" />

@section('content')

    <form action="{{ route('juegos.update', $juego->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">

            <div class="col-12">
                <label for="nombre_juego" class="form-label">Nombre del juego</label>
                <input type="text" class="form-control" id="nombre_juego" name="nombre_juego"
                    placeholder="Introduzca el nombre del juego" value="{{ $juego->nombre_juego }}">
            </div>
            <div class="col-6">
                <label for="publico_objetivo" class="form-label">Publico objetivo</label>
                <input type="text" class="form-control" id="publico_objetivo" name="publico_objetivo"
                    value="{{ $juego->publico_objetivo }}" placeholder="Introduzca el nombre del juego">
            </div>
            <div class="col-6">
                <label for="precio_juego" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio_juego" name="precio_juego" value="{{ $juego->precio }}"
                    placeholder="Introduzca el nombre del juego">
            </div>
            <br><br><br><br>
            <div class="col-12">
                <select class="form-select" aria-label="Default select example" name="empresa_id">
                    <option value="">Seleccione una empresa</option>

                    @foreach ($empresas as $empresa)
                        @if ($juego->empresa_id == $empresa->id)
                            <option value="{{ $empresa->id }}" selected>{{ $empresa->nombre_empresa }}</option>
                        @else
                            <option value="{{ $empresa->id }}">{{ $empresa->nombre_empresa }}</option>
                        @endif
                    @endforeach


                </select>
            </div>

            <div class="d-grid gap-2 buton_empresas">
                <button class="btn btn-primary estilo_boton" type="submit">INSERTAR DATOS</button>
            </div>



        </div>


    </form>

@endsection
