@extends('master')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Empresa</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juegos as $juego)
                <tr>
                    <th scope="row">{{$juego->id}}</th>
                    <td>{{$juego->nombre_juego}}</td>
                    <td>{{$juego->nombre_empresa}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('juegos.edit', $juego->id) }}" role="button">Editar</a>
                        <form action="{{ route('juegos.delete', $juego->id) }}" method="POST">
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
