@extends('master')


@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('juegos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-12">
                <label for="nombre_juego" class="form-label">Nombre del juego</label>
                <input type="text" class="form-control" id="nombre_juego" name="nombre_juego"
                    placeholder="Introduzca el nombre del juego">
                @if ($errors->has('nombre_juego'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('nombre_juego') }}</label>
                @endif

            </div>
            <div class="col-4">
                <label for="publico_objetivo" class="form-label">Publico objetivo</label>
                <input type="text" class="form-control" id="publico_objetivo" name="publico_objetivo"
                    placeholder="Introduzca el nombre del juego">
                @if ($errors->has('publico_objetivo'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('publico_objetivo') }}</label>
                @endif
            </div>
            <div class="col-4">
                <label for="precio_juego" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio_juego" name="precio_juego"
                    placeholder="Introduzca el nombre del juego">
                @if ($errors->has('precio_juego'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('precio_juego') }}</label>
                @endif
            </div>
            <div class="col-4">
                <label for="archivo" class="form-label">Seleccione un archivo que requiera</label>
                <input type="file" name="archivo" id="archivo">
                @if ($errors->has('archivo'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('archivo') }}</label>
                @endif
            </div>



            <div class="col-12">
                <select class="form-select" aria-label="Default select example" name="empresa_id">
                    <option value="">Seleccione una empresa</option>
                    @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre_empresa }}</option>
                    @endforeach


                </select>
                @if ($errors->has('empresa_id'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('empresa_id') }}</label>
                @endif
            </div>

            <div class="d-grid gap-2 buton_empresas">
                <button class="btn btn-primary estilo_boton" type="submit">INSERTAR DATOS</button>
            </div>



        </div>


    </form>

@endsection
