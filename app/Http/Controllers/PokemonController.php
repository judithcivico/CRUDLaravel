<?php

namespace App\Http\Controllers;

use App\Models\PokemonModel;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        // Muestra la lista de todos los pokémon
        $pokemons = PokemonModel::all();
        return view('pokemon.index', compact('pokemons'));
    }

    public function create()
    {
        // Muestra el formulario para crear un nuevo pokémon
        return view('pokemon.create');
    }

    public function store(Request $request)
    {
        // Almacena un nuevo pokémon en la base de datos
        $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:255',
            'tamaño' => 'required|max:255',
            'peso' => 'required|max:255',
        ]);

        PokemonModel::create([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'),
            'tamaño' => $request->input('tamaño'),
            'peso' => $request->input('peso'),
        ]);

        return redirect()->route('pokemon.index')->with('success', 'Pokémon creado correctamente');
    }

    public function show($id)
    {
        // Muestra los detalles de un pokémon específico
        $pokemon = PokemonModel::findOrFail($id);
        return view('pokemon.show', compact('pokemon'));
    }

    public function edit($id)
    {
        // Muestra el formulario para editar un pokémon específico
        $pokemon = PokemonModel::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        // Actualiza un pokémon en la base de datos
        $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:255',
            'tamaño' => 'required|max:255',
            'peso' => 'required|max:255',
        ]);

        $pokemon = PokemonModel::findOrFail($id);
        $pokemon->update($request->all());

        return redirect()->route('pokemon.index')->with('success', 'Pokémon actualizado correctamente');
    }

    public function destroy($id)
    {
        // Elimina un pokémon de la base de datos
        $pokemon = PokemonModel::find($id);
        $pokemon->delete();

        return redirect()->route('pokemon.index')->with('success', 'Pokémon eliminado correctamente');
    }
}
