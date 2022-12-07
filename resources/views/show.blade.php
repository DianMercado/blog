@extends('layouts.app')
@section('title','trainer')
@section('content')
    <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
    class="card-img-top rounded-circle mx-auto d-block" src="../images/{{$trainer->Avatar}}" alt="">

    <h5 class="text-center">{{$trainer->name}}</h5>
    <h5 class="text-center">{{$trainer->Apellido}}</h5>
    <div class="text-center">
        
        <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Editar</a>
        <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">Borrar</a>
    </div>
@endsection