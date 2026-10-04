{{-- plantilla básica extendida de la plantilla principal 
(plantilla.blade.php en tu caso). --}}
@extends('plantilla')

@section('titulo', 'Consultar')

@section('contingut')
<h2>Listar coches</h2>
<p>Secció de consulta de dades dels clients enregistrats.</p>


{{-- Control d'errors específic: mostra l'alerta si s'intenta accedir a un coche que no existeix --}}
@if (session('error'))
    <div class="alert alert-danger mb-3" role="alert">
        {{ session('error') }}
    </div>
@endif



<ul>
  @foreach ($dades as $i)
  <li><a href="/listar/{{ $i->matricula }}">
    {{ $i->marca }} {{ $i->modelo }} (Matricula: {{ $i->matricula }})</a></li>
  @endforeach

</ul>
@endsection