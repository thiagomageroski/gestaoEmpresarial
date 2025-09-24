<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required','string','max:255'],
            'email' => ['required','email','unique:clientes,email'],
            'telefone' => ['nullable','string','max:20'],
        ]);

        Cliente::create($dados);

        return redirect()->route('cadastro')
            ->with('sucesso', 'Cadastro realizado com sucesso!');
    }
}
