
@extends('layouts.app')

@section('content')
<h1>Cantidad de Árboles de la Especie {{ $especie->nombre }}</h1>
<p>Cantidad de árboles: {{ $especie->arboles_count }}</p>
@endsection