<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista pública de produtos
    public function index()
    {
        $produtos = Produto::where('ativo', true)->paginate(12);
        return view('pages.produtos.index', compact('produtos'));
    }

    // Página pública do produto
    public function show(Produto $produto)
    {
        abort_unless($produto->ativo, 404);
        return view('pages.produtos.show', compact('produto'));
    }

    // ---- Admin (CRUD simples) ----
    public function adminIndex()
    {
        $produtos = Produto::latest()->paginate(15);
        return view('pages.admin.index', compact('produtos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => ['required','string','max:255'],
            'descricao' => ['nullable','string'],
            'preco' => ['required','numeric','min:0'],
            'estoque' => ['required','integer','min:0'],
            'ativo' => ['sometimes','boolean'],
        ]);
        $data['ativo'] = $request->boolean('ativo');
        $produto = Produto::create($data);
        return redirect()->route('admin.produtos.show', $produto)->with('sucesso','Produto criado!');
    }

    public function update(Request $request, Produto $produto)
    {
        $data = $request->validate([
            'nome' => ['required','string','max:255'],
            'descricao' => ['nullable','string'],
            'preco' => ['required','numeric','min:0'],
            'estoque' => ['required','integer','min:0'],
            'ativo' => ['sometimes','boolean'],
        ]);
        $data['ativo'] = $request->boolean('ativo');
        $produto->update($data);
        return back()->with('sucesso','Produto atualizado!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('admin.produtos')->with('sucesso','Produto removido!');
    }
}
