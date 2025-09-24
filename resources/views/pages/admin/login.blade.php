@extends('layouts.app')
@section('title','Login Admin')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Acesso Administrativo</h1>
  <form class="max-w-md space-y-4" method="POST" action="{{ route('login.post') }}">
    @csrf
    <x-input type="email" name="email" label="E-mail" />
    <x-input type="password" name="password" label="Senha" />
    <label class="flex items-center gap-2 text-sm">
      <input type="checkbox" name="remember"> Lembrar-me
    </label>
    <x-botao type="submit">Entrar</x-botao>
  </form>
@endsection
