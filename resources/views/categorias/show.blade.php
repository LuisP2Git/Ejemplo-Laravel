@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        Detalles de la Categoría
    </div>
    <div class="card-body">
        <h4>Nombre:</h4>
        <p>{{ $categoria->nombre }}</p>

        <h4>Descripción:</h4>
        <p>{{ $categoria->descripcion ?? 'Sin descripción.' }}</p>

        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection