@extends('layouts.app')
@section('titulo', 'Crear Producto')
@section('cabecera', 'Crear Producto')

@section('contenido') 
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100 rounded-2xl">
            <div class="card-body flex flex-col items-center">
                {{-- Formulario para crear un producto --}}
                <form action="{{ route('productos.store') }}" method="POST" class="w-full">
                    @csrf
                    {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del producto" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    {{-- Descripción --}}
                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripción</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered rounded-lg border-violet-700" />
                    </div>
                    {{-- Precio --}}
                    <div class="form-control">
                        <label class="label" for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                        <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    {{-- Stock --}}
                    <div class="form-control">
                        <label class="label" for="stock">
                            <span class="label-text">Stock</span>
                        </label>
                        <input type="number" name="stock" placeholder="Escriba el stock" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    {{-- Botones --}}
                    <div class="form-control mt-6 flex flex-col items-center space-y-4">
                        <button type="submit" class="btn bg-violet-500 hover:bg-violet-800 text-white rounded-md w-full">Crear Producto</button>
                        <a href="{{ route('productos.index') }}" class="btn bg-pink-500 hover:bg-pink-800 text-white text-center rounded-md w-full">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
