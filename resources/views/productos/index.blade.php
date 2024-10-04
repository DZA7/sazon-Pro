@extends('layouts.app')
@section('titulo', 'Consultar productos')
@section('cabecera', 'Productos')

@section('contenido')
    {{-- botón para crear un nuevo producto --}}
    <div class="flex justify-start m-6">
        <a href="{{ route('productos.create') }}" class="btn btn-outline rounded-full">Crear Producto</a>
    </div>
    
    {{-- Listado de productos --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-4 m-6">
        @foreach ($productos as $producto)
            <div class="card w-full bg-white shadow-xl rounded-lg">
                <figure class="flex justify-center">
                    <img class="rounded-lg" src="https://loremflickr.com/200/200/store&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" />
                </figure>
                <div class="card-body text-center"> <!-- Centramos el contenido -->
                    <h2 class="card-title justify-center items-center mb-4">
                        <span>{{ $producto->nombre }}</span>
                        <div class="badge badge-secondary text-xs bg-pink-500 hover:bg-violet-600 text-white rounded-md ">${{ $producto->precio }}</div>
                    </h2>
                    <p class="mb-4">{{ Str::limit($producto->descripcion, 50) }}</p>
                    <div class="card-actions justify-center space-x-2"> <!-- Alineamos los botones al centro y les damos espacio -->
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs rounded-md bg-violet-500 hover:bg-violet-800 text-white">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs rounded-md bg-green-500 hover:bg-green-800 text-white">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
