@extends('plantilla')
@section('titulo', 'Modificar coche')

@section('contingut')
<p>Hola soy modificar coche</p>

<ul>
@foreach ($dades as $i)
    <li>{{ $i->matricula }} - {{ $i->marca }} {{ $i->modelo }} {{ $i->anyo }} 
       <a href="{{ route('datos_modificarfila', $i->matricula) }}" class="btn btn-primary btn-sm">Editar</a
    </li>
@endforeach
</ul>
@endsection