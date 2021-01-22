@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Añadir un Animal</h1>
    <div class="row">
 <div class="offset-md-3 col-md-6">
 <div class="card">
 <div class="card-header text-center">
     <h2> Añadir animal</h2>
 </div>
 <div class="card-body" style="padding:30px">
     <form method="post" action="{{route('animales.store')}}">
 {{-- TODO: Abrir el formulario e indicar el método POST --}}
 {{-- TODO: Protección contra CSRF --}}
 <div class="form-group">
     
 <label for="especie">Especie</label>
 <input type="text" name="especie" id="especie" class="form-control" required>
 </div>
 <div class="form-group">

 <label for="peso">Peso</label>
 <input type="number" name="peso" id="peso" class="form-control" required>
 </div>
 <div class="form-group">

 <label for="altura">Altura</label>
 <input type="text" name="altura" id="altura" class="form-control" required>
 </div>
 <div class="form-group">

 {{-- TODO: Completa el input para la fecha de nacimiento --}}
 <label for="fecha">Fecha</label>
 <input type="date" name="fecha" id="fecha" class="form-control" required>
 </div>
 <div class="form-group">
     
 {{-- TODO: Completa el input para la alimentación--}}
 <label for="alimentacion">Alimentacion</label>
 <input type="text" name="alimentacion" id="alimentacion" class="form-control" required>
 </div>
 <div class="form-group">
     
 <label for="descripcion">Descripción</label>
 <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
 </div>
 <div class="form-group">
{{-- TODO: Completa el input para la alimentación--}}
 <label for="imagen">Imagen</label>
 <input type="file" name="imagen" id="imagen" class="form-control" required>
 </div>
 </div>
 <div class="form-group text-center">
 <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
 Añadir animal
 </button>
 </div>
 {{-- TODO: Cerrar formulario --}}
 </form>
 </div>
 </div>
 </div>
</div>
@endsection
