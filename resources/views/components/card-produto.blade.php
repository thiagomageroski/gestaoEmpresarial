@props(['produto'])
<div class="border rounded-lg p-4 bg-white flex flex-col">
  <h3 class="text-lg font-semibold">{{ $produto->nome }}</h3>
  <p class="text-sm text-gray-600 flex-1">{{ Str::limit($produto->descricao, 120) }}</p>
  <div class="mt-3 flex items-center justify-between">
    <span class="font-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>
    <a href="{{ route('produtos.show', $produto) }}" class="text-blue-600">Ver</a>
  </div>
</div>
