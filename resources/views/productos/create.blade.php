@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="categoria_id">Categoría</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
