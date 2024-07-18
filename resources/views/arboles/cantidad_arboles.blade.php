<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@extends('layouts.app')

@section('content')
<h1>Cantidad de Árboles de la Especie {{ $especie->nombre }}</h1>
<p>Cantidad de árboles: {{ $especie->arboles_count }}</p>
@endsection