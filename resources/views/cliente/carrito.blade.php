@extends('layouts.base1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="center-block">
                <h1 class="text-center">VISTA CARRITO
                    <img src="images/carro.png"  style=" height:50px;float: right;">
                </h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <br>
                    <!-- INPUT SE DEBE CAMBIAR PORQUE ACA LLEGA INFORMACION DE LA BASE DE DATOS -->

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Producto 1" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-danger" type="button">Eliminar</button>
                    </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Producto 2" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-danger" type="button">Eliminar</button>
                    </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Producto 3" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-danger" type="button">Eliminar</button>
                    </div>
                    </div>
                    <!-- FIN DEL INPUT -->
                    
                    <br>
                    <h5> Elegir Forma De Pago </h5>
                    <a class="btn btn-success" href="#" role="button">Efectivo</a>
                    <a class="btn btn-primary" href="#" role="button">Tarjeta de Credito</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
