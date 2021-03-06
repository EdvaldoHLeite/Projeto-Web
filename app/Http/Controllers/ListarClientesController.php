<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ListarClientesController extends Controller
{
    public function listar() {
        $clientes = Cliente::all();
        return view('listaClientes', ['clientes' => $clientes]);
    }

    public function exibir($id) {
        $cliente = Cliente::findOrFail($id);
        return view('exibirCliente', ['cliente' => $cliente]);
    }
}
