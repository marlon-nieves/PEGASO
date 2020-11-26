@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">PRODUCTOS</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/administrador" class="btn btn-danger">Atras</a>
    </div> 
    <div class="col text-right">
        <a href="/administrador/productos/create" class="btn btn-success">Nuevo Producto</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID PRODUCTO</th>
                        <th scope="col">NOMBRE PRODUCTO</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">ELIMINAR</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
@endsection