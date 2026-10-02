@extends('plantilla')

@section('titulo', 'Buscar Cotxe')

@section('contingut')

<p>Hola soy buscar </p>

<div class="mx-auto" style="width: 300px;">
<form name="f_buscar" class="mb-3" action="{{ route('datos_buscar') }}" method="POST">
    
@csrf      
      
      @error('marca')
         <h6 class="alert alert-danger">{{ $message }}</h6>    
      @enderror

    <label for="marca" class="form-label">Marca a buscar:</label>
    <input type="text" 
    class="form-control mb-2" name="marca" id="marca" placeholder="Ej: Seat">

    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
</div>




@endsection