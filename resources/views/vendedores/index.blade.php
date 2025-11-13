@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Lista de Vendedores</h2>

    <a href="{{ route('vendedores.create') }}" class="btn btn-primary mb-3">Agregar Vendedor</a>

    @if ($vendedores->count() > 0)
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendedores as $vendedor)
                    <tr>
                        <td>{{ $vendedor->id }}</td>
                        <td>{{ $vendedor->nombre }}</td>
                        <td>{{ $vendedor->cargo }}</td>
                        <td>
                            <a href="{{ route('vendedores.show', $vendedor->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este vendedor?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay vendedores registrados.</p>
    @endif
</div>
@endsection
