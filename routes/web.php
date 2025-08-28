<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{produto_id}', [ProdutoController::class, 'show'])
    ->where('produto_id','[0-9]+')
    ->name('produtos.show');

Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('about');

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/clientes', [ClienteController::class, 'index'])->name('admin.clientes.index');
    Route::get('/clientes/{id}', [ClienteController::class, 'show'])
        ->where('id','[0-9]+')
        ->name('admin.clientes.show');

    Route::get('/fornecedores', [AdminController::class, 'fornecedores'])->name('admin.fornecedores');
    Route::get('/produtos', [AdminController::class, 'produtos'])->name('admin.produtos');
    Route::get('/produto/{slug}', [AdminController::class, 'produto'])
        ->where('slug', '[a-zA-Z0-9\-]+')
        ->name('admin.produto');
});
