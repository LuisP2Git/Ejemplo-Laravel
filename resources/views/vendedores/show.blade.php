@extends('layouts.app')

@section('title', 'Detalle del Vendedor')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">Detalles del Vendedor</div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $vendedor->nombre }}</p>
        <p><strong>Cargo:</strong> {{ $vendedor->cargo }}</p>
        <p><strong>Teléfono:</strong> {{ $vendedor->telefono }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection