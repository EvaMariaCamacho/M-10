
@extends('layouts.app')

@section('content')


<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
      
        {{ Session::get('mensaje')}}

    </div>
        @endif
    

<a href="{{  url('catalog/create') }}" class="btn btn-success">Registrar nuevo catalog</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>N.Reg.</th>
            <th>Codigo</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($catalogs as $catalog)
        <tr>
            <td>{{ $catalog->id }}</td>
            <td>{{ $catalog->codigo }}</td>
            <td>{{$catalog->autor}}</td>
            <td>{{$catalog->titulo}}</td>
            <td>{{$catalog->descripcion}}</td>
            <td>          
                <a href="{{url('/catalog/'.$catalog->id.'/edit') }}" class="btn btn-warning">

                    Editar
                </a>
                <form action="{{url('/catalog/'.$catalog->id)}}" class="d-inline" method="post">
                   
                @csrf
                @method('DELETE')
                   <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                
                </form>
                
                
                
                </td>
        </tr>
        @endforeach   
    </tbody>

    
</table>

{{ $catalogs->links() }}
</div>
@endsection