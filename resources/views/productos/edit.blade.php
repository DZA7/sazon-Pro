@extends('layouts.app')
@section('titulo', 'Editar Producto')
@section('cabecera', 'Editar Producto')

@section('contenido') 
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100 rounded-2xl">
            <div class="card-body">
                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del producto" value="{{ $producto->nombre }}" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripción</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Escriba la descripción" value="{{ $producto->descripcion }}" class="input input-bordered rounded-lg border-violet-700" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                        <input type="number" name="precio" placeholder="Escriba el precio" value="{{ $producto->precio }}" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="stock">
                            <span class="label-text">Stock</span>
                        </label>
                        <input type="number" name="stock" placeholder="Escriba el stock" value="{{ $producto->stock }}" class="input input-bordered rounded-lg border-violet-700" required />
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn bg-violet-500 hover:bg-violet-800 text-white rounded-md w-full">Actualizar Producto</button>
                        <a href="{{ route('productos.index') }}" class="btn bg-pink-500 hover:bg-pink-800 text-white text-center rounded-md w-full">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
