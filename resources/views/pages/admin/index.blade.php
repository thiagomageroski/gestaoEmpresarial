@extends('layouts.app')
@section('title','Admin • Produtos')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Produtos (Admin)</h1>

  <details class="mb-6 bg-white rounded border p-4">
    <summary class="cursor-pointer font-semibold">Novo produto</summary>
    <form class="grid md:grid-cols-2 gap-4 mt-4" method="POST" action="{{ route('admin.produtos.store') }}">
      @csrf
      <x-input name="nome" label="Nome" />
      <x-input name="preco" type="number" step="0.01" label="Preço" />
      <x-input name="estoque" type="number" label="Estoque" />
      <div class="md:col-span-2"><x-input name="descricao" label="Descrição" /></div>
      <label class="flex items-center gap-2"><input type="checkbox" name="ativo" checked> Ativo</label>
      <div class="md:col-span-2"><x-botao type="submit">Salvar</x-botao></div>
    </form>
  </details>

  <div class="bg-white rounded border">
    <table class="w-full text-sm">
      <thead>
        <tr class="border-b">
          <th class="text-left p-3">#</th>
          <th class="text-left p-3">Nome</th>
          <th class="text-left p-3">Preço</th>
          <th class="text-left p-3">Estoque</th>
          <th class="text-left p-3">Ativo</th>
          <th class="text-left p-3"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $p)
        <tr class="border-b">
          <td class="p-3">{{ $p->id }}</td>
          <td class="p-3">{{ $p->nome }}</td>
          <td class="p-3">R$ {{ number_format($p->preco,2,',','.') }}</td>
          <td class="p-3">{{ $p->estoque }}</td>
          <td class="p-3">{{ $p->ativo ? 'Sim' : 'Não' }}</td>
          <td class="p-3">
            <a class="text-blue-600" href="{{ route('admin.produtos.show', $p) }}">Editar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="p-3">{{ $produtos->links() }}</div>
  </div>
@endsection
