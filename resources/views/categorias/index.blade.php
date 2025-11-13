@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary">+ Nueva Categoría</a>
</div>

@if($categorias->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>
                        <a href="{{ route('categorias.show', $categoria) }}" class="text-decoration-none">
                            {{ $categoria->nombre }}
                        </a>
                    </td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a class="btn btn-sm btn-warning" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" onsubmit="return confirm('¿Deseas eliminar esta categoría?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="alert alert-info">No hay categorías registradas aún.</div>
@endif
@endsection
