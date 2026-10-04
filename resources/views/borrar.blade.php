@extends('plantilla')

@section('titulo', 'Coche vendido')

@section('contingut')
<p>Soy borrar</p>

@if (session('success'))
    <h6 class="alert alert-success">{{ session('success') }}</h6>  
@endif

<ul>
    @foreach ($dades as $i)
        <li class="mb-2">
            {{ $i->matricula }} - {{ $i->marca }} {{ $i->modelo }}

            <!-- Formulario correctamente anidado y cerrado con </form> -->
            <form action="/borrar/{{ $i->matricula }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
            </form>
        </li>
    @endforeach
</ul>

@endsection