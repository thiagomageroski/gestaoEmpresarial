@extends('layouts.app')
@section('title',$produto->nome)
@section('content')
  <div class="bg-white p-6 rounded border">
    <h1 class="text-2xl font-bold">{{ $produto->nome }}</h1>
    <p class="text-gray-600 mt-2">{{ $produto->descricao }}</p>
    <p class="mt-4 text-xl font-semibold">R$ {{ number_format($produto->preco,2,',','.') }}</p>
    <p class="text-sm text-gray-600">Estoque: {{ $produto->estoque }}</p>
  </div>
@endsection
