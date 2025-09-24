@extends('layouts.app')

@section('title','Início')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Bem-vindo ao SGE</h1>
  <p class="mb-6">Gerencie clientes e produtos de forma simples.</p>

  <h2 class="text-xl font-semibold mb-3">Destaques</h2>
  <div class="grid md:grid-cols-3 gap-4">
    @forelse($destaques as $p)
      <x-card-produto :produto="$p" />
    @empty
      <p>Nenhum produto em destaque.</p>
    @endforelse
  </div>
@endsection
