<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        return view('pages.admin.clientes.index');
    }

    public function show($id) {
        return view('pages.admin.clientes.show', compact('id'));
    }
}
