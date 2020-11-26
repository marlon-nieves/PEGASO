@extends('layouts.app')

@section('content')

<div class="row mb-3">
    <div class="col text-left mb-4">
        <h4>A donde quieres ir ? </h4>
    </div>
</div>
<div class="row mb-3">
    <div class="col text-center" >
        <a href="/administrador/domiciliarios" class="btn btn-secondary btn-block active" style="font-size:20px"> DOMICILIARIOS </a>
    </div>
    <div class="col text-center" >  
        <a href="/administrador/productos" class="btn btn-secondary btn-block active" style="font-size:20px"> PRODUCTOS </a>
    </div>
    <div class="col text-center" > 
        <a href="/administrador/vendedores" class="btn btn-secondary btn-block active" style="font-size:20px"> VENDEDORES </a>
    </div>
</div>
<div class="row mb-3">
    <div class="col text-center" >
        <a href="/administrador/domicilios" class="btn btn-secondary btn-block active" style="font-size:20px"> DOMICILIOS </a>
    </div>
    <div class="col text-center" >  
        <a href="/administrador/pedidos" class="btn btn-secondary btn-block active" style="font-size:20px"> PEDIDOS </a>
    </div>
    <div class="col text-center" > 
        <a href="/administrador/clientes" class="btn btn-secondary btn-block active" style="font-size:20px"> CLIENTES </a>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-12 col-md-12 col-lg-12">
        <div class="col alert alert-primary text-center mb-4">
            <img src="images/form.png"  style=" height:300px;" >
        </div>
    </div>
</div>

@endsection