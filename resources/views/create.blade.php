@extends("layouts.app")
@section('title', 'Trainers Create')
@section('content')

{!!Form::open (['route'=>'trainers.store', 'method'=>'POST','files'=>'true'])!!}
<div class="container " >
<div clas="form-group">
    {{Form::label('name','Nombre')}}
    {{Form::text('name', null,['class'=>'form-control'])}}
    {{Form::label('Apellido','Apellido')}}
    {{Form::text('Apellido', null,['class'=>'form-control'])}}
</div>
<div clas="form-group">
    {{Form::label('Avatar','Avatar')}}
    {{Form::file('Avatar')}}
</div>

{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection
</div>