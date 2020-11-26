@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">AGREGAR DOMICILIARIO</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/administrador/domiciliarios" class="btn btn-danger">Atras</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <form method="POST" action="{{url('/dimiciliarios')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="IdUser">ID USUARIO</label>
                <input type="string" class="form-control" id="IdUser" name="IdUser" placeholder="IdUser" value="{{old('IdUser')}}">
            </div>
            <div class="form-group">
                <label for="name">NOMBRE</label>
                <input type="string" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="mail">CORREO</label>
                <input type="string" class="form-control" id="mail" name="mail" placeholder="mail" value="{{old('mail')}}">
            </div>
            <div class="form-group">
                <label for="password">CONTRASEÑA</label>
                <input type="string" class="form-control" id="password" name="password" placeholder="password" value="{{old('password')}}">
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">CREAR</button>
            </div>
        </form>
    </div>
</div>
@endsection