<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('pages.admin.login');
    }

    public function dashboard() {
        return view('pages.admin.dashboard');
    }

    public function fornecedores() {
        return view('pages.admin.fornecedores.index');
    }

    public function produtos() {
        return view('pages.admin.produtos.index');
    }

    public function produto($slug) {
        return view('pages.admin.produtos.show', compact('slug'));
    }
}
