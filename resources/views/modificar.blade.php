@extends('plantilla')

@section('titulo', 'Modificar coche')

@section('contingut')
<h2 class="mb-3">Modificar Vehículo</h2>
<p>Selecciona un vehículo de la tabla para editar sus datos.</p>
@if (session('error'))
    <div class="alert alert-danger mb-3">{{ session('error') }}</div>  
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dades as $i)
            <tr>
                <td><strong>{{ $i->matricula }}</strong></td>
                <td>{{ $i->marca }}</td>
                <td>{{ $i->modelo }}</td>
                <td>{{ $i->anyo }}</td>
                <td>{{ $i->color }}</td>
                <td class="text-center">
                    <a href="{{ route('datos_modificarfila', $i->matricula) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection