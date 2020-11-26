@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-success text-center">EDIATR VENDEDOR"{{$product->id}}" </h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/vendedores/listar" class="btn btn-danger">ATRAS</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <form method="POST" action="/vendedor/{{$vendedores->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="IdUser">ID USUARIO</label>
                    <input type="string" class="form-control" id="IdUser" name="IdUser" placeholder="IdUser"
                    value="{{old('IdUser', $vendedores->IdUser)}}">
                </div>
                <div class="form-group">
                    <label for="name">NOMBRE</label>
                    <input type="string" class="form-control" id="name" name="name" placeholder="name"
                    value="{{old('name', $vendedores->name)}}">
                </div>
                <div class="form-group">
                    <label for="mail">CORREO</label>
                    <input type="string" class="form-control" id="mail" name="mail" placeholder="mail"
                    value="{{old('mail', $vendedores->mail)}}">
                </div>
                <div class="form-group">
                    <label for="password">CONTRASEÑA</label>
                    <input type="string" class="form-control" id="password" name="password" placeholder="password"
                    value="{{old('password', $vendedores->password)}}">
                </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-primary">EDITAR</button>
            </div>
        </form>
    </div>
</div>
@endsection