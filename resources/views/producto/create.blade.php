@extends('layouts.app')

@section('content')
<div class="container">

<h1>Ingresar Producto</h1>
<form action="{{url('/producto')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="codigo"> Codigo </label>
<input class="form-control" type="text" name = "codigo">
<br>
</div>
<div class="form-group">
<label for="nombre"> Nombre </label>
<input class="form-control"  type="text" name = "nombre">
<br>
</div>
<div class="form-group">
<label for="cantidad"> Precio </label>
<input class="form-control"  type="text" name = "cantidad">
<br>
</div>
<div class="form-group">
<label for="precio"> Cantidad </label>
<input class="form-control"  type="text" name = "precio">
<br>
</div>

<div class="form-group">
<label for="foto"> Foto</label><br>
<input class="form-control"   type="file" name = "foto">
<br>
</div>

<input  class="btn btn-dark"  type="submit" value = "Ingresar">
<a class="btn btn-secondary" href="{{ url('producto/') }}">Regresar</a>
</form>
</div>
@endsection