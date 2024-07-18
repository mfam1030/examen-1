

@extends('layouts.app')

@section('content')
<h1>Especies en Extinción</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Cantidad de Árboles</th>
        </tr>
    </thead>
    <tbody>
        @foreach($especies as $especie)
        <tr>
            <td>{{ $especie->id }}</td>
            <td>{{ $especie->nombre }}</td>
            <td>{{ $especie->descripcion }}</td>
            <td>{{ $especie->arboles_count }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection