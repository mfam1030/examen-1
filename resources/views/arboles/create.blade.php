
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Árbol</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Crear Árbol</h1>

        <form action="{{ route('arboles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_especie" class="form-label">Especie:</label>
                <select name="id_especie" id="id_especie" class="form-select">
                    @foreach($especies as $especie)
                        <option value="{{ $especie->id }}">{{ $especie->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="latitud" class="form-label">Latitud:</label>
                <input type="text" name="latitud" id="latitud" class="form-control">
            </div>

            <div class="mb-3">
                <label for="longitud" class="form-label">Longitud:</label>
                <input type="text" name="longitud" id="longitud" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="señalizado" id="señalizado" value="1" class="form-check-input">
                <label for="señalizado" class="form-check-label">Señalizado</label>
            </div>

            <div class="mb-3">
                <label for="año_plantado" class="form-label">Año Plantado:</label>
                <input type="text" name="año_plantado" id="año_plantado" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    @endsection
</body>
</html>
