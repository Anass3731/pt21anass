@extends('plantilla')
@section('titulo', 'Modificar coche')

@section('contingut')
<div class="mb-3">
 <form action="{{route('datos_actualimodificarfila',$fila[0]->matricula)}}" method="POST">
 @csrf
        @method('PATCH')
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
        @error('marca')
            <h6 class="alert alert-danger">{{ $message }}</h6>            
        @enderror
        <label for="" class="form-label">Matrícula (No editable)</label>
        <input type="text" class="form-control" name="matricula" value="{{ $fila[0]->matricula }}" readonly>
        <label for="" class="form-label">marca</label>
        <input type="text" class="form-control" name="marca" id="" aria-describedby="helpId"  value="{{ $fila[0]->marca }}">
       @error('marca')
                <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
        <label for="" class="form-label">modelo</label>
        <input type="text" class="form-control" name="modelo" id="" aria-describedby="helpId"  value="{{ $fila[0]->modelo }}">
        @error('modelo')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        <label for="" class="form-label">Año</label>
        <input type="text" class="form-control" name="anyo" id="" aria-describedby="helpId"  value="{{ $fila[0]->anyo }}">
        @error('anyo')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror

        <label for="" class="form-label">Color</label>
        <input type="text" class="form-control" name="color" id="" aria-describedby="helpId"  value="{{ $fila[0]->color }}">
        @error('color')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror

        <button type="submit"  class="btn btn-primary">Enviar</button>
        </form>
</div>
@endsection