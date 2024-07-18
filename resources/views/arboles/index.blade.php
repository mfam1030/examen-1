

@extends('layouts.app')

@section('content')
<h1>Lista de Árboles</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Especie</th>
            <th>Descripción</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Señalizado</th>
            <th>Año Plantado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arboles as $arbol)
        <tr>
            <td>{{ $arbol->id }}</td>
            <td>{{ $arbol->especie->nombre }}</td>
            <td>{{ $arbol->descripcion }}</td>
            <td>{{ $arbol->latitud }}</td>
            <td>{{ $arbol->longitud }}</td>
            <td>{{ $arbol->señalizado ? 'Sí' : 'No' }}</td>
            <td>{{ $arbol->año_plantado }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection