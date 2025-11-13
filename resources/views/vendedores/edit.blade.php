@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-warning text-dark">Editar Vendedor</div>
    <div class="card-body">
        <form action="{{ route('vendedores.update', $vendedor) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ $vendedor->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" name="cargo" value="{{ $vendedor->cargo }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" value="{{ $vendedor->telefono }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
