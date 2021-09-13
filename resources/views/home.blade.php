@extends('layouts.plantilla')

@section('title', 'Timerclock Gesdes')

@section('content')
    <h1>Bienvenido a Timerclock Gesdes</h1>

    <a href="{{route('areas')}}">Areas</a> 
    <br>
    <br>
    <a href="{{route('grupos')}}">Grupos</a> 
    <br>
    <br>
    <a href="{{route('status')}}">Status</a> 
    <br>
    <br>
    <a href="{{route('usuarios')}}">Usuarios</a>
    <br>
    <br>
    <a href="{{route('registros')}}">Registros</a>
    

    
@endsection