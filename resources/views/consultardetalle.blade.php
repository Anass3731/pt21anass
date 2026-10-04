@extends('plantilla')

@section('titulo', 'Consultar detalle Cotxe')

@section('contingut')

<p>Hola soy consultar detalle</p>
<div class="container my-4">
<p>Mostrar resultado. Resultado: {{ count($dades) }}</p>
<div class="card shadow-sm p-4">
        <div class="row align-items-center">
    <h4><strong>DATOS</strong></h4>

<div class="col-md-7">
<ul>
    <li><strong>Matricula->  </strong>{{ $dades[0]->matricula }}</li>
    <li><strong>Marca->  </strong>{{ $dades[0]->marca }}</li>
    <li><strong>Modelo->  </strong>{{ $dades[0]->modelo }}</li>
    <li><strong>Año->  </strong>{{ $dades[0]->anyo }}</li>
</ul>
</div>


<div class="col-md-5 text-center mt-3 mt-md-0">
<img src="{{ asset('img/' . strtolower($dades[0]->marca) . '.jpg') }}"

alt="Logo de {{ $dades[0]->marca }}" 
    class="img-fluid p-2" 
    style="max-height: 200px;"
    onerror="this.src='{{ asset('img/default.png') }}';">
    </div>
</div>

<div class="mt-3">
        <a href="{{ url('/listar') }}" class="btn btn-secondary">Volver al catálogo</a>
    </div>

@endsection