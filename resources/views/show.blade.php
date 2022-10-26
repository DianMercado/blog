
@extends("layouts.app")
@section('title', 'Trainers Edit')
@section('content')
@csrf

  <img style="height: 100px; width: 100px; background-color:#EFEFEF; margin:20px;"
  class="card.img.top rounded-circle mx-auto d-block"
  src="/images/{{$trainer->Avatar}}" class="card-img-top" alt=" ">
    <h5 class="text-center">{{$trainer->name}}</h5>
    <div class= "text-center">
        <p>some quick</p>
    <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Delete</a>
    <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-primary">Editar</a>
    </div>

@endsection