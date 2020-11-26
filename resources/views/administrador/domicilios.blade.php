@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">DOMICILIARIOS</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/administrador" class="btn btn-danger">Atras</a>
    </div> 
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID USUARIO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">ELIMINAR</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection