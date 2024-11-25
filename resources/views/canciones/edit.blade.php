@extends('layout.layout')

@section('title', 'Editar Canción')

@section('content')
<h2 class="text-center mb-4">Editar Canción</h2>
<form action="/canciones/{{ $cancion->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $cancion->titulo }}" required>
    </div>
    <div class="mb-3">
        <label for="grupo" class="form-label">Grupo/Artista</label>
        <input type="text" class="form-control" id="grupo" name="grupo" value="{{ $cancion->grupo }}" required>
    </div>
    <div class="mb-3">
        <label for="estilo" class="form-label">Estilo</label>
        <input type="text" class="form-control" id="estilo" name="estilo" value="{{ $cancion->estilo }}" required>
    </div>
    <div class="mb-3">
        <label for="puntuacion" class="form-label">Puntuación</label>
        <input type="number" class="form-control" id="puntuacion" name="puntuacion" value="{{ $cancion->puntuacion }}" min="1" max="10" required>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
@endsection