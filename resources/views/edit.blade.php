@extends("layouts.app")
@section('title', 'Trainers Edit')
@section('content')
<form class="form-group" method="POST" action="{{action('TrainerContrller@update',  $trainer->id)}}" enctype="multipart/form-data" >
@csrf
@method('PUT')
<div clas="form-group">
    <label for="">Nombre: </label>
    <input type="text"  name= "name" value="{{$trainer->name}}" class="form-control">
    <label for="">Apellido: </label>
    <input type="text"  name= "Apellido" value="{{$trainer->Apellido}}" class="form-control">

</div>
<div clas="form-group">
    <label for="">Avatar:</lavel>
    <input type="file" name="Avatar" value="{{$trainer->Avatar}}">
</div>

<button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection