@extends('master')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a class="btn btn-warning" href="#" role="button">Editar</a>
            <a class="btn btn-danger" href="#" role="button">Eliminar</a>
        </td>
      </tr>

    </tbody>
  </table>

@endsection
