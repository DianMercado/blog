@extends("layouts.app")
@section('title', 'Trainers')
@section('content')
<div class=container>

@csrf
<h3> Entrenadores </h3>

<div class="row">
    @foreach($entrenadores as $entrenador)
<div class="col-sm">
<div class="card text-center" style="width: 18rem;">
  <img style="height: 100px; width: 100px; background-color:#EFEFEF; margin:20px;"
  class="card.img.top rounded-circle mx-auto d-block"
  src="{{$entrenador->avatar}}" class="card-img-top" alt=" ">
  <div class="card-body">
    <h5 class="card-title">{{$entrenador->name}}</h5>
    <p class="card-text">{{$entrenador->Apellido}}</p>
    <a href="/trainers/{{$entrenador->id}}" class="btn btn-primary">Mostrar</a>
    <a href="/delete/{{$entrenador->id}}" class="btn btn-secundary">Borrar</a>
    
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
