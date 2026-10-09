@extends('plantilla')

@section('titulo', 'Coche vendido')

@section('contingut')
<h2 class="mb-3">Borrar coche vendido</h2>
@if (session('success'))
    <div class="alert alert-success mb-3">{{ session('success') }}</div>  
@endif

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
                    <form action="/borrar/{{ $i->matricula }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection