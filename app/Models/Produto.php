<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'estoque', 'ativo'];
    protected $casts = ['ativo' => 'boolean', 'preco' => 'decimal:2'];
}