@extends('layouts.app')

@section('title', 'Lista de Vendedores')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Vendedores</h1>
        <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Nuevo</a>
    </div>

    @if($vendedores->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedores as $vend)
                        <tr>
                            <td>{{ $vend->id }}</td>
                            <td><a href="{{ route('vendedores.show', $vend) }}">{{ $vend->nombre }}</a></td>
                            <td>{{ $vend->cargo }}</td>
                            <td>{{ $vend->telefono }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('vendedores.edit', $vend) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('vendedores.destroy', $vend) }}" method="POST" onsubmit="return confirm('¿Eliminar este vendedor?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay vendedores registrados aún.</p>
    @endif
@endsection