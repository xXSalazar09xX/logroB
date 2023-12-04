<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('estado', 1)->get();
        return view('categoria.categoriar', compact('categorias'));
    }

    public function create()
    {
        $categorias = Categoria::where('estado', 1)->get();
        return view('categoria.categoriar', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Valida y guarda los datos de la categoría aquí
        $car = new Categoria();
        $car->nombre = $request->nombre;
        $car->producto_id = $request->producto_id;
        $car->save();
        return back()->with('success', 'Categoría registrada exitosamente');
    }
}
