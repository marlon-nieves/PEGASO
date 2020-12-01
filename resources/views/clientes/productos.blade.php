@extends('layouts.cabecera')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                                   
            <div class="card " style="background-color:#ECF0F1">
                <div class="card-header" align="center" href="/productos"><img src="/images/pan.png" align="left" width="100" height="80" >BIENVENIDO A LA PANADERIA PEGASO <a href="/productos"><img src="/images/shoppingcard.png" align="right" width="80" height="80" ></div>              
                  
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <a href="/productos"><img src="/images/imagen.jpeg" width="200" height="200" ></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <a href="/inventarios"><img src="/images/images.jpeg" width="200" height="200" ></a>
                        </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                        <a href="/vendedores"><img src="/images/maxresdefault.jpg" width="200" height="200" ></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <a href=""><img src="/images/Pan-casero-fácil.jpg" width="200" height="200" ></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <a href=""><img src="/images/panes-sin-levadura-480x467.jpg" width="200" height="200" ></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <a href=""><img src="/images/imagen.jpeg" width="200" height="200" ></a>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-6">
                        <div class="col-md-6 offset-md-5">
                            <a class="btn btn-primary" href="/registro" role="button">REGISTRARSE</a>
                            <a class="btn btn-success" href="/cliente" role="button">INGRESAR</a>
                           
                        </div>
                    </div>
            </div>
            
        </div>
        
    </div>
</div>

@endsection