@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
    @foreach($animales as $animal)
        <ul>
            <li>{{$animal}}</li>
        </ul>
    @endforeach
@endsection
