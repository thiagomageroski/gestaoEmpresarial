@extends('layouts.app')
@section('title','Editar: '.$produto->nome)
@section('content')
  <h1 class="text-2xl font-bold mb-4">Editar produto</h1>

  <form class="grid md:grid-cols-2 gap-4 bg-white p-4 rounded border"
        method="POST" action="{{ route('admin.produtos.update', $produto) }}">
    @csrf @method('PUT')
    <x-input name="nome" label="Nome" :value="$produto->nome" />
    <x-input name="preco" type="number" step="0.01" label="Preço" :value="$produto->preco" />
    <x-input name="estoque" type="number" label="Estoque" :value="$produto->estoque" />
    <div class="md:col-span-2">
      <x-input name="descricao" label="Descrição" :value="$produto->descricao" />
    </div>
    <label class="flex items-center gap-2">
      <input type="checkbox" name="ativo" {{ $produto->ativo ? 'checked' : '' }}> Ativo
    </label>
    <div class="md:col-span-2 flex gap-3">
      <x-botao type="submit">Salvar alterações</x-botao>

      <form method="POST" action="{{ route('admin.produtos.destroy', $produto) }}"
            onsubmit="return confirm('Tem certeza que deseja remover este produto?')">
        @csrf @method('DELETE')
        <button class="px-4 py-2 rounded bg-red-600 text-white">Remover</button>
      </form>
    </div>
  </form>
@endsection
