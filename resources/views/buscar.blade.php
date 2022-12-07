@extends("layouts.app")
@section('title', 'Buscar')
@section('content')

<div class="container " >
<form method="GET" action="/api/search">
        <input type="text" name="text" placeholder="nombre"/>
        <button type="submit" class="btn btn-outline-dark btn-lg">Buscar</button>
    </form>
    	</div>
         
         
@endsection
