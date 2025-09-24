<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class HomeController extends Controller
{
    public function home()
    {
        $destaques = Produto::where('ativo', true)->latest()->take(6)->get();
        return view('pages.home', compact('destaques'));
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function cadastro()
    {
        return view('pages.cadastro');
    }
}
