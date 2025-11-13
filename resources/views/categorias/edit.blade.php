@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-header bg-warning text-dark">Editar Categoría</div>
    <div class="card-body">
        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $categoria->descripcion }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
