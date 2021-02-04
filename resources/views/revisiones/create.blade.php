@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    <h1>Revisiones</h1>
    <div class="row">
 <div class="offset-md-3 col-md-6">
 <div class="card">
 <div class="card-header text-center">
     <h2> Añadir revision</h2>
 </div>
 <div class="card-body" style="padding:30px">
 {{-- TODO: Abrir el formulario e indicar el método POST --}}
     
 <form method="post" action="{{route('revisiones.store', $animal)}}" enctype="multipart/form-data">
 {{-- TODO: Protección contra CSRF --}}
@csrf 

 <div class="form-group">
     
 {{-- TODO: Completa el input para la fecha de revision --}}
 <label for="fecha">Fecha</label>
 <input type="date" name="fecha" id="fecha"  class="form-control" required>
 </div>
 <div class="form-group">
     
 {{-- TODO: Completa el input para la fecha de revision --}}
     
 <label for="descripcion">Descripción</label>
 <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
 </div>

 </div>
 <div class="form-group text-center">
 <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
 Añadir Revision
 </button>
 </div>
 {{-- TODO: Cerrar formulario --}}
 </form>
 </div>
 </div>
 </div>
@endsection
