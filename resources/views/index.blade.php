
@extends("layouts.app")
@section('title', 'Trainers')
@section('content')
@csrf
<p> Listado de trainers </p>
<div class="row">
@foreach($trainers as $trainer)
<div class="col-sm">
<div class="card text-center" style="width: 18rem;">
  <img style="height: 100px; width: 100px; background-color:#EFEFEF; margin:20px;"
  class="card.img.top rounded-circle mx-auto d-block"
  src="images/{{$trainer->Avatar}}" class="card-img-top" alt=" ">
  <div class="card-body">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p class="card-text">{{$trainer->Apellido}}</p>
    <a href="#" class="btn btn-primary"> hola</a>
    <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Delete</a>
    <a href="/trainers/{{$trainer->id}}" class="btn btn-primary">Mostrar</a>
    
  </div>
</div>
</div>
@endforeach
</div>
@endsection