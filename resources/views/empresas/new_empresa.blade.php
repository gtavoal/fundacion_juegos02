@extends('master')


<link rel="stylesheet" href="{{ asset('/css/estilos_empresas.css') }}" />

@section('content')

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-12">
                <label for="nombre_empresa" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Instruduzca el nombre de la empresa">
            </div>
            <div class="col-6">
                <label for="telefono_empresa" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono_empresa" name="telefono_empresa" placeholder="Instruduzca el número de telefono">
            </div>
            <div class="col-6">
                <label for="direccion_empresa" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa" placeholder="Instruduzca la dirección de la empresa">
            </div>
            <div class="col-12">
                <label for="nit_empresa" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit_empresa" name="nit_empresa" placeholder="Instruduzca el nit de la empresa">
            </div>

            <div class="buton_empresas">
                <button type="button" class="btn btn-danger estilo_boton">Introducir datos</button>
            </div>




        </div>

    </form>

@endsection
