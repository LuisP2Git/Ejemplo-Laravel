@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" value="{{ $producto->precio }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="categoria_id">Categoría</label>
            <select name="categoria_id" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
