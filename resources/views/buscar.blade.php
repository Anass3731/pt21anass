@extends('plantilla')

@section('titulo', 'Buscar Coche')

@section('contingut')

<p>Hola soy buscar </p>

<div class="mx-auto" style="width: 500px;">
<form action="{{ url('/buscar') }}" method="POST" class="col-md-6 mt-3">    
@csrf      
      
      

   <div class="mb-3">
            <label for="algo" class="form-label">BUSCAR</label>
            <input type="text" 
                   class="form-control" 
                   name="algo" 
                   id="algo" 
                   placeholder="Ej: 1234ABC, Seat, Ibiza..."
                   value="{{ old('algo') }}">


    @error('algo')
         <h6 class="alert alert-danger">{{ $message }}</h6>    
    @enderror

    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
</div>




@endsection