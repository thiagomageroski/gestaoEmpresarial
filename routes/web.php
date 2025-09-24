<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, AuthController, AdminController, ProdutoController, ClienteController
};

// Públicas
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');

// Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Área Admin (protegida)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/produtos', [ProdutoController::class, 'adminIndex'])->name('admin.produtos');
    Route::get('/produtos/{produto}', [AdminController::class, 'show'])->name('admin.produtos.show');
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('admin.produtos.store');
    Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('admin.produtos.update');
    Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('admin.produtos.destroy');
});
