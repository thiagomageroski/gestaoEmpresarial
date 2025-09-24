<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totais = [
            'clientes' => Cliente::count(),
            'produtos' => Produto::count(),
            'produtos_ativos' => Produto::where('ativo', true)->count(),
            'estoque_total' => Produto::sum('estoque'),
        ];

        $ultimosClientes = Cliente::latest()->take(5)->get();
        $ultimosProdutos = Produto::latest()->take(5)->get();

        return view('pages.admin.dashboard', compact('totais','ultimosClientes','ultimosProdutos'));
    }

    public function show(Produto $produto)
    {
        // Reuso de show no admin (com edição) para produtos
        return view('pages.admin.show', compact('produto'));
    }
}
