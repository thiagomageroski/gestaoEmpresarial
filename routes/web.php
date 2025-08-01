<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   echo 'Bem vindo a pagina inicial!';
});

Route::get('/produtos', function () {
    echo 'Pagina de produtos!';
});

Route::get('/produtos/{produto_id}', function (int $produto_id,) {
    echo 'Id do produto: ' . $produto_id;
})->where('produto_id','[0-9]+');

Route::get('/cadastro', function (){ 
    echo 'cadastro';
});

Route::get('/login', function (){ 
    echo 'login';
});

Route::get('/sobre', function (){ 
    echo 'sobre';
})->name('about');

Route::prefix('/admin')->group(function(){
    Route::get('/login', function () {
        echo 'login adimin';
    });
    Route::get('/dashboard', function () {
        echo 'dashboard';
    })->name('admin.dashboard');
    Route::get('/clientes', function () {
        echo 'clientes';
    });
    Route::get('/clientes/{id?}', function (int $id) {
        echo ' Id do clinte: ' . $id;
    })->where('clinte_id','[0-9]+');
    Route::get('/fornecedores', function () {
        echo 'fornecedores';
    });
    Route::get('/produtos', function () {
        echo 'produtos';
    });
    Route::get('/produto/{slug}', function ($slug) {
        echo 'Produto: ' . $slug;
    })->where('slug', '[a-zA-Z0-9\-]+');
});