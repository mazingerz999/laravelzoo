@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
   
   <h1>Editar un Animal</h1>
    <div class="row">
 <div class="offset-md-3 col-md-6">
 <div class="card">
 <div class="card-header text-center">
     <h2> Editar animal</h2>
 </div>
 <div class="card-body" style="padding:30px">
 {{-- TODO: Abrir el formulario e indicar el método POST --}}
     
 <form method="post" action="{{ route('animales.update', $animal) }}" enctype="multipart/form-data">
 
 {{-- TODO: Protección contra CSRF --}}
 @csrf 
 @method('put')
 <div class="form-group">
     
 <label for="especie">Especie</label>
 <input type="text" name="especie" id="especie" value="{{$animal->especie}}" class="form-control" required>
 </div>
 <div class="form-group">

 <label for="peso">Peso</label>
 <input type="number" name="peso" id="peso" value="{{$animal->peso}}" class="form-control" required>
 </div>
 <div class="form-group">

 <label for="altura">Altura</label>
 <input type="text" name="altura" id="altura" value="{{$animal->altura}}" class="form-control" required>
 </div>
 <div class="form-group">

 {{-- TODO: Completa el input para la fecha de nacimiento --}}
 <label for="fecha">Fecha</label>
 <input type="date" name="fecha" id="fecha" value="{{$animal->fecha}}" class="form-control" required>
 </div>
 <div class="form-group">
     
 {{-- TODO: Completa el input para la alimentación--}}
 <label for="alimentacion">Alimentacion</label>
 <input type="text" name="alimentacion" id="alimentacion" value="{{$animal->alimentacion}}" class="form-control" required>
 </div>
 <div class="form-group">
     
 <label for="descripcion">Descripción</label>
 <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$animal->descripcion}}</textarea>
 </div>
 <div class="form-group">
{{-- TODO: Completa el input para la alimentación--}}
 <label for="imagen">Imagen</label>
 <input type="file" name="imagen" value="{{$animal->imagen}}" id="imagen" class="form-control" required>
 </div>
 </div>
 <div class="form-group text-center">
 <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
 Editar animal
 </button>
 </div>
 {{-- TODO: Cerrar formulario --}}
 </form>
 </div>
 </div>
 </div>
   
@endsection
