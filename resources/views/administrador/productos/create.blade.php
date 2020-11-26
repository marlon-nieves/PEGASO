@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">AGREGAR PRODUCTO</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/administrador/productos" class="btn btn-danger">Atras</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <form method="POST" action="{{url('/products')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="IdProduct">ID PRODUCTO</label>
                <input type="string" class="form-control" id="IdProduct" name="IdProduct" placeholder="IdProduct" value="{{old('IdProduct')}}">
            </div>
            <div class="form-group">
                <label for="nameProducto">NOMBRE PRODUCTO</label>
                <input type="string" class="form-control" id="nameProducto" name="nameProducto" placeholder="nameProducto" value="{{old('nameProducto')}}">
            </div>
            <div class="form-group">
                <label for="price">PRECIO</label>
                <input type="string" class="form-control" id="price" name="price" placeholder="price" value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="descripcion">DESCRIPCION</label>
                <input type="string" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" value="{{old('descripcion')}}">
            </div>
            <div class="form-group">
                <label for="image">IMAGEN:</label>
                <input type="file" class="form-control-file" id="image" name="image"/>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">CREATE</button>
            </div>
        </form>
    </div>
</div>
@endsection