@extends('layouts.app')

@section('title', 'Registrar Vendedor')

@section('contenido')
    <h1 class="mb-4 text-center">Registrar Nuevo Vendedor</h1>

    <div class="card shadow-sm p-4">
        <form action="{{ route('vendedores.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre del vendedor" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Ej: Asesor de ventas" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ej: 3001234567" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Guardar Vendedor
                </button>
            </div>
        </form>
    </div>
@endsection
