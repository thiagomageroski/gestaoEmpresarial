<nav class="bg-white border-b">
  <div class="container mx-auto px-4 py-3 flex items-center gap-4">
    <a href="{{ route('home') }}" class="font-semibold">SGE</a>
    <a href="{{ route('produtos.index') }}">Produtos</a>
    <a href="{{ route('cadastro') }}">Cadastro</a>
    <a href="{{ route('sobre') }}">Sobre</a>
    <div class="ml-auto flex items-center gap-3">
      @auth
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-botao type="submit">Sair</x-botao>
        </form>
      @else
        <a class="text-blue-600" href="{{ route('login') }}">Área Admin</a>
      @endauth
    </div>
  </div>
</nav>
