<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar lista de productos.
     */
    public function index()
    {
        // Incluye la relación con categoría para evitar múltiples consultas (Eager Loading)
        $productos = Producto::with('categoria')->get();
        return view('productos.index', compact('productos'));
    }

    /**
     * Mostrar formulario de creación.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Guardar nuevo producto.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'descripcion' => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Producto::create($data);

        return redirect()
            ->route('productos.index')
            ->with('ok', 'Producto creado exitosamente.');
    }

    /**
     * Mostrar detalles de un producto.
     */
    public function show(Producto $producto)
    {
        // Cargar también su categoría
        $producto->load('categoria');
        return view('productos.show', compact('producto'));
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Actualizar producto existente.
     */
    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'descripcion' => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto->update($data);

        return redirect()
            ->route('productos.index')
            ->with('ok', 'Producto actualizado exitosamente.');
    }

    /**
     * Eliminar producto.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('ok', 'Producto eliminado correctamente.');
    }
}
