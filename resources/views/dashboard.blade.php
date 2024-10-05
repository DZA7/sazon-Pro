@extends('layouts.app')
@section('titulo', 'Consultar Dashboard')
@section('contenido')
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Hola, {{ auth()->user()->name }}</h1>
        <p class="py-6">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
        <a href="{{ route('productos.index') }}" class= "btn btn-primary rounded-md hover:bg-violet-800">Ver productos</a>
      </div>
    </div>
  </div>
@endsection