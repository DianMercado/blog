@extends("layouts.app")
@section('title', 'Trainers')
@section('content')
<div class=container>
@csrf
<div class="container text-" >
    <a href="/trainers" class="btn btn-outline-secundary ">Regresar</a>
    </div>
<div class="container  align-items: center; y justify-content: center ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Entrenadores') }}</div>
                <div class="card-body">         
  <table class="table">
  <thead>
    <tr><th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col"></th>
      <th scope="col"></th></tr>
  </thead>
  <tbody>
    @foreach($entrenadores as $entrenador)
    <tr>
        <td>{{$entrenador->id}}</td>
      <td>{{$entrenador->name}}</td>
      <td>{{$entrenador->Apellido}}</td>
      <td><a href="/trainers/{{$entrenador->id}}" class="btn btn-primary">Mostrar</a></td>
        <td><a href="/delete/{{$entrenador->id}}" class="btn btn-secundary">Borrar</a></td>
      </tr>
      @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection