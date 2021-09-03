@extends('master')


<link rel="stylesheet" href="{{ asset('/css/estilos_juegos.css') }}" />

@section('content')

    <form action="{{ route('juegos.store') }}" method="POST">
        @csrf
        <div class="row">

            <div class="col-12">
                <label for="nombre_juego" class="form-label">Nombre del juego</label>
                <input type="text" class="form-control" id="nombre_juego" name="nombre_juego"
                    placeholder="Introduzca el nombre del juego">
            </div>
            <div class="col-6">
                <label for="publico_objetivo" class="form-label">Publico objetivo</label>
                <input type="text" class="form-control" id="publico_objetivo" name="publico_objetivo"
                    placeholder="Introduzca el nombre del juego">
            </div>
            <div class="col-6">
                <label for="precio_juego" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio_juego" name="precio_juego"
                    placeholder="Introduzca el nombre del juego">
            </div>

            <div class="col-12">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="d-grid gap-2 buton_empresas">
                <button class="btn btn-primary estilo_boton" type="button">INSERTAR DATOS</button>
              </div>



        </div>


    </form>

@endsection
