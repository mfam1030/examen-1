

@extends('layouts.app')

@section('content')
<h1>Lista de Especies</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($especies as $especie)
        <tr>
            <td>{{ $especie->id }}</td>
            <td>{{ $especie->nombre }}</td>
            <td>{{ $especie->descripcion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection