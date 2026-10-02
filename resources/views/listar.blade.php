{{-- plantilla básica extendida de la plantilla principal 
(plantilla.blade.php en tu caso). --}}
@extends('plantilla')

@section('titulo', 'Consultar')

@section('contingut')
<h2>Listar coches</h2>
<p>Secció de consulta de dades dels clients enregistrats.</p>
<ul>
  @foreach ($dades as $i)
  <li><a href="/listar/{{ $i->bastidor }}">
    {{ $i->marca }} (Bastidor: {{ $i->bastidor }})</a></li>
  @endforeach

</ul>
@endsection