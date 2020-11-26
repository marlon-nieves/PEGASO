<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index()
    {
        return view('dueño.home');
    }
    
    public function productos()
    {
        return view('dueño.productos');
    }

    public function pedidos()
    {
        return view('dueño.pedidos');
    }
    
    public function clientes()
    {
        return view('dueño.clientes');
    }

    public function carrito()
    {
        return view('cliente.carrito');
    }
}