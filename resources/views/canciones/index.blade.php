@extends('layout.layout')

@section('title', 'Lista de Canciones')

@section('content')
<h2 class="text-center mb-4">Lista de Canciones</h2>
<div class="d-flex justify-content-end mb-3">
    <a href="/canciones/create" class="btn btn-primary">Añadir Canción</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Título</th>
            <th>Grupo</th>
            <th>Estilo</th>
            <th>Puntuación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($canciones as $cancion)
        <tr>
            <td>{{ $cancion->titulo }}</td>
            <td>{{ $cancion->grupo }}</td>
            <td>{{ $cancion->estilo }}</td>
            <td>{{ $cancion->puntuacion }}</td>
            <td>
                <a href="/canciones/{{ $cancion->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                <form action="/canciones/{{ $cancion->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection