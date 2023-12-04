<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create()
    {
        $categorias = Categoria::where('estado',1)->get();
        return view('producto.productor', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Valida y guarda los datos del producto aquí
        $producto = Producto::create([
            'nombre' => $request->input('nombre'),
            'fecha_vencimiento' => $request->input('fecha_vencimiento'),
            'precio' => $request->input('precio'),
            'cantidad_en_stock' => $request->input('cantidad_en_stock'),
            'categoria_id' => $request->input('categoria_id'),
        ]);

        // Puedes redirigir a la vista de detalle del producto u otra acción
        return redirect('/')->with('success', 'Producto ingresado exitosamente.');
    }
}
