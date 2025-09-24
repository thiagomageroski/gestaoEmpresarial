@extends('layouts.app')
@section('title','Dashboard')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

  <div class="grid md:grid-cols-4 gap-4 mb-6">
    <div class="bg-white p-4 rounded border"><div class="text-sm text-gray-500">Clientes</div><div class="text-2xl">{{ $totais['clientes'] }}</div></div>
    <div class="bg-white p-4 rounded border"><div class="text-sm text-gray-500">Produtos</div><div class="text-2xl">{{ $totais['produtos'] }}</div></div>
    <div class="bg-white p-4 rounded border"><div class="text-sm text-gray-500">Produtos ativos</div><div class="text-2xl">{{ $totais['produtos_ativos'] }}</div></div>
    <div class="bg-white p-4 rounded border"><div class="text-sm text-gray-500">Estoque total</div><div class="text-2xl">{{ $totais['estoque_total'] }}</div></div>
  </div>

  <div class="grid md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded border">
      <h2 class="font-semibold mb-3">Últimos clientes</h2>
      <ul class="space-y-2">
        @forelse($ultimosClientes as $c)
          <li>{{ $c->nome }} — {{ $c->email }}</li>
        @empty <li>Nenhum cliente.</li> @endforelse
      </ul>
    </div>
    <div class="bg-white p-4 rounded border">
      <h2 class="font-semibold mb-3">Últimos produtos</h2>
      <ul class="space-y-2">
        @forelse($ultimosProdutos as $p)
          <li>{{ $p->nome }} — R$ {{ number_format($p->preco,2,',','.') }}</li>
        @empty <li>Nenhum produto.</li> @endforelse
      </ul>
    </div>
  </div>
@endsection
