@extends('master')


<link rel="stylesheet" href="{{ asset('/css/estilos_empresas.css') }}" />

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-12">
                <label for="nombre_empresa" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa"
                    placeholder="Instruduzca el nombre de la empresa">
                @if ($errors->has('nombre_empresa'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('nombre_empresa') }}</label>
                @endif

            </div>
            <div class="col-6">
                <label for="telefono_empresa" class="form-label">Télefono</label>
                <input type="number" class="form-control" id="telefono_empresa" name="telefono_empresa"
                    placeholder="Instruduzca el número de telefono">
                @if ($errors->has('telefono_empresa'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('telefono_empresa') }}</label>
                @endif
            </div>
            <div class="col-6">
                <label for="direccion_empresa" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa"
                    placeholder="Instruduzca la dirección de la empresa">
                @if ($errors->has('direccion_empresa'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('direccion_empresa') }}</label>
                @endif
            </div>
            <div class="col-12">
                <label for="nit_empresa" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit_empresa" name="nit_empresa"
                    placeholder="Instruduzca el nit de la empresa">
                @if ($errors->has('nit_empresa'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('nit_empresa') }}</label>
                @endif
            </div>

            @if (auth()->user()->perfil_id == 1)
                <div class="buton_empresas">
                    <button type="submit" class="btn btn-danger estilo_boton">Introducir datos</button>
                </div>
            @endif





        </div>

    </form>

@endsection
