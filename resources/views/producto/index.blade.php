@extends('layouts.app')

@section('content')
<div class="container">

<h1>Mostar lista de Productos</h1>

<a class="btn btn-secondary" href="{{ url('producto/create') }}"> Registara Producto</a>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Codigo</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->id}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$producto->foto}}" alt="" width="100">
                </td>

                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->cantidad}}</td>
                <td> 
                 <a class="btn btn-dark" href="#w">
                    Editar
                </a>   
                                  
                <form action="" method = "post" class="d-inline" >
                @csrf 
                  <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')">
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>

    
</table>
</div>
@endsection