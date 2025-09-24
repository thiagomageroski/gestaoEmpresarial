@extends('layouts.app')
@section('title','Cadastro de Cliente')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Cadastre-se</h1>
  <form class="max-w-lg space-y-4" method="POST" action="{{ route('clientes.store') }}">
    @csrf
    <x-input name="nome" label="Nome" />
    <x-input type="email" name="email" label="E-mail" />
    <x-input name="telefone" label="Telefone" />
    <x-botao type="submit">Salvar</x-botao>
  </form>
@endsection
