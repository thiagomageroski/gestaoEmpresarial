@extends('layouts.app')
@section('title','Produtos')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Produtos</h1>
  <div class="grid md:grid-cols-3 gap-4">
    @foreach($produtos as $p)
      <x-card-produto :produto="$p" />
    @endforeach
  </div>
  <div class="mt-4">{{ $produtos->links() }}</div>
@endsection
