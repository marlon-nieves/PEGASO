@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-success text-center">EDITAR PRODUCTO"{{$product->id}}" </h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/products/listar" class="btn btn-danger">ATRAS</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <form method="POST" action="/products/{{$productos->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="IdProduct">ID PRODCUTO</label>
                    <input type="string" class="form-control" id="IdProduct" name="IdProduct" placeholder="IdProduct"
                    value="{{old('IdProduct', $productos->IdProduct)}}">
                </div>
                <div class="form-group">
                    <label for="nameProducto">NOMBRE PRODUCTO</label>
                    <input type="string" class="form-control" id="nameProducto" name="nameProducto" placeholder="nameProducto"
                    value="{{old('nameProducto', $productos->nameProducto)}}">
                </div>
                <div class="form-group">
                    <label for="price">PRECIO</label>
                    <input type="string" class="form-control" id="price" name="price" placeholder="price"
                    value="{{old('price', $productos->price)}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">DESCRIPCION</label>
                    <input type="string" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion"
                    value="{{old('descripcion', $productos->descripcion)}}">
                </div>
                <div class="form-group">
                <label for="image">IMAGEN:</label>
                <input type="file" class="form-control-file" id="image" name="image"/>
            </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-primary">EDITAR</button>
                </div>
        </form>
    </div>
</div>
@endsection