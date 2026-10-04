@extends('plantilla')

@section('titulo', 'Insertar Coche')

@section('contingut')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4 text-center">Añadir coche a la venta</h2>
        
        

        <!-- FORMULARIO DE ENVÍO -->
        <form action="{{ route('datos_insertar') }}" method="POST">
            <!-- TOKEN DE SEGURIDAD OBLIGATORIO DE LARAVEL -->
            @csrf
            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            
            <!-- Campo 1: Matrícula -->
            <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula</label>
                <input type="text" class="form-control" name="matricula" id="matricula" aria-describedby="helpId" placeholder="0000MMM" value="{{ old('matricula') }}">
                <small id="helpId" class="form-text text-muted">Introduce la matrícula sin espacios ni guiones.</small>
            @error('matricula')
            <h6 class="alert alert-danger mt-1 p-1">{{ $message }}</h6>
            @enderror
            </div>

            <!-- Campo 2: Marca -->
            <div class="mb-3">
                <label for="marca" class="form-label">Marca del coche</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Audi, SEAT, Volkswagen... " value="{{ old('marca') }}">
                @error('marca')
                    <h6 class="alert alert-danger mt-1 p-1">{{ $message }}</h6>
                @enderror
            </div>

            <!-- Campo 3: Modelo -->
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo del coche</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Escribe el modelo" value="{{ old('modelo') }}">
                @error('modelo')
                    <h6 class="alert alert-danger mt-1 p-1">{{ $message }}</h6>
                @enderror
            </div>

            <!-- Campo 4: Año -->
            <div class="mb-3">
                <label for="anyo" class="form-label">Año del coche</label>
                <input type="number" class="form-control" name="anyo" id="anyo" placeholder="¿De qué año es?" value="{{ old('anyo') }}">
                @error('anyo')
                    <h6 class="alert alert-danger mt-1 p-1">{{ $message }}</h6>
                @enderror
            </div>

            <!-- BOTÓN PARA ENVIAR EL FORMULARIO -->
            <button type="submit" class="btn btn-primary w-100">Guardar Coche</button>
        </form>

    </div>
</div>
@endsection