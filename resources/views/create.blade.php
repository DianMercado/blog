@extends("layouts.app")
@section('title', 'Trainers Create')
@section('content')
{!!Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']) !!}
@include('form')
<div class="container">
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
</div>
@endsection

