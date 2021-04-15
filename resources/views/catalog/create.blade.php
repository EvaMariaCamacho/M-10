@extends('layouts.app')

@section('content')
<div class="container">
<h1>Crear Catalog</h1>
 
@if(count($errors)>0)

    <div class="aletrt alert-danger" role="alert">

        <ul>

            @foreach( $errors->all() as $error)
            <li>  {{ $error }} </li>
            @endforeach

        </ul>
    
    </div>

@endif


<form action="{{ url('/catalog')}}" method="post">
@csrf

<div class="form-group">

    <label for="Codigo">Codigo
    <input type="text" class="form-control" name="codigo" value="{{ old('codigo')}}">
    </label>

</div>

<div class="form-group">

    <label for="Autor">Autor
    <input type="text" class="form-control" name="autor" value="{{ old('autor') }}">
    </label>

</div>

<div class="form-group">

    <label for="Titulo">Titulo
    <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
    </label>

</div>

<div class="form-group">

    <label for="Descripcion">Descripcion
    <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
    </label>

</div>

    <input class="btn btn-success" type="submit" value="Crear datos">

    <a class=" btn btn-primary" href="{{  url('catalog/') }}">Regresar</a>

</form>
</div>
@endsection