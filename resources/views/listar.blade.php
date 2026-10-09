@extends('plantilla')

@section('titulo', 'Consultar Catálogo')

@section('contingut')
<h2 class="mb-3">Catálogo de Vehículos</h2>
@if (session('error'))
    <div class="alert alert-danger mb-3" role="alert">
        {{ session('error') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th class="text-center">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dades as $i)
            <tr>
                <td><strong>{{ $i->matricula }}</strong></td>
                <td>{{ $i->marca }}</td>
                <td>{{ $i->modelo }}</td>
                <td class="text-center">
                    <a href="{{ url('/listar/' . $i->matricula) }}" class="btn btn-info btn-sm text-white">Ver detalle</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection