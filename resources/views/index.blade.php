@extends("layouts.app")
@section('title', 'Trainers')
@section('content')
<div class=container>

@csrf
<h3> Entrenadores </h3>
<div class="container " >
  <form method="GET" action="/api/search">
          <input type="text" name="text" placeholder="nombre"/>
          <button type="submit" class="btn btn-primary">Buscar</button>
      </form>
        </div>
<div clas= container>
  <h3>  _</h3>
  <h3>  </h3>
  <h3>  </h3>
  <a href="{{route('listado.pdf')}}" class="btn btn-primary"> Descargar </a>
  <h3>  _</h3>
  <h3>  </h3>
  <h3>  </h3>
</div>

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
    <a href="/trainers/{{$trainer->id}}" class="btn btn-primary">Mostrar</a>
    <a href="/delete/{{$trainer->id}}" class="btn btn-secundary">Borrar</a>
    
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
