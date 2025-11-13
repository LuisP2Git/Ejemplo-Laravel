@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-header bg-primary text-white">Nueva Categoría</div>
    <div class="card-body">
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
