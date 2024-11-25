<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class ListaController extends Controller
{
    // Este método recupera todas las canciones y las pasa a una vista:
    public function index()
    {
        $canciones = Cancion::all(); // Recupera todas las canciones
        return view('canciones.index', compact('canciones')); // Retorna a la vista
    }

   // Este método muestra una vista con un formulario para añadir una nueva canción:
    public function create()
    {
        return view('canciones.create'); // Retorna la vista de creación
    }

   // Este método guarda los datos enviados desde el formulario de creación:
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'grupo' => 'required|string|max:255',
            'estilo' => 'required|string|max:100',
            'puntuacion' => 'required|integer|min:1|max:10',
        ]);

        Cancion::create($validated); // Crea una nueva canción
        return redirect()->route('canciones.index')->with('success', 'Canción añadida correctamente');
    }

    
    //Este método muestra un formulario para editar una canción existente
    public function edit($id)
    {
        $cancion = Cancion::findOrFail($id); // Encuentra la canción o lanza un error 404
        return view('canciones.edit', compact('cancion')); // Retorna la vista con los datos
    }

    // Este método actualiza los datos de una canción existente:
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'grupo' => 'required|string|max:255',
            'estilo' => 'required|string|max:100',
            'puntuacion' => 'required|integer|min:1|max:10',
        ]);

        $cancion = Cancion::findOrFail($id);
        $cancion->update($validated); // Actualiza la canción
        return redirect()->route('canciones.index')->with('success', 'Canción actualizada correctamente');
    }

    // Este método elimina una canción de la base de datos:
    public function destroy($id)
    {
        $cancion = Cancion::findOrFail($id);
        $cancion->delete(); // Elimina la canción
        return redirect()->route('canciones.index')->with('success', 'Canción eliminada correctamente');
    }
}
