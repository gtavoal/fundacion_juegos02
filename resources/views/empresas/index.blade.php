@extends('master')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Télefono</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id }}</th>
                    <td>{{ $empresa->nombre_empresa }}</td>
                    <td>{{ $empresa->direccion }}</td>
                    <td>{{ $empresa->telefono }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('empresas.edit', $empresa->id) }}"
                            role="button">Editar</a>
                        <form action="{{ route('empresas.delete', $empresa->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
