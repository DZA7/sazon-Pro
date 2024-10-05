<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener todos los productos
        $productos = Producto::all();

        // Retornar la vista index con los productos
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        // Retornar la vista de creación de productos
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'precio' => 'required|numeric',
            'stock' => 'required|integer|min:0',
        ]);

        // Crear un nuevo producto
        Producto::create($request->all());

        // Redirigir al índice de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    public function show(Producto $producto)
    {
        // Retornar la vista de un producto específico
        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        // Buscar el producto por su ID
        $producto = Producto::findOrFail($id);

        // Retornar la vista de edición de productos con los datos del producto
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'precio' => 'required|numeric',
            'stock' => 'required|integer|min:0',
        ]);

        // Buscar el producto por su ID
        $producto = Producto::findOrFail($id);

        // Actualizar los datos del producto
        $producto->update($request->all());

        // Redirigir al índice de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy($id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::findOrFail($id);

        // Elimina el producto
        $producto->delete();

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
