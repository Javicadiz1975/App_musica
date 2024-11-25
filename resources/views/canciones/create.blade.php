@extends('layout.layout')

@section('title', 'Añadir Canción')

@section('content')
<h2 class="text-center mb-4">Añadir Nueva Canción</h2>
<form action="/canciones" method="POST">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="mb-3">
        <label for="grupo" class="form-label">Grupo/Artista</label>
        <input type="text" class="form-control" id="grupo" name="grupo" required>
    </div>
    <div class="mb-3">
        <label for="estilo" class="form-label">Estilo</label>
        <input type="text" class="form-control" id="estilo" name="estilo" required>
    </div>
    <div class="mb-3">
        <label for="puntuacion" class="form-label">Puntuación</label>
        <input type="number" class="form-control" id="puntuacion" name="puntuacion" min="1" max="10" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection