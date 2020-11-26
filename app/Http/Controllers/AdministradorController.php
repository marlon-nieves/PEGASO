<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        return view('administrador.home');
    }

    public function domicilios()
    {
        return view('administrador.domicilios');
    }

    public function pedidos()
    {
        return view('administrador.pedidos');
    }
    
    public function clientes()
    {
        return view('administrador.clientes');
    }
}
