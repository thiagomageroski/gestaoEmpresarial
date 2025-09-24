<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>@yield('title','SGE')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 flex flex-col">
  @include('partials.navbar')

  <main class="container mx-auto px-4 py-6 flex-1">
    @if (session('sucesso'))
      <div class="mb-4 p-3 rounded bg-green-100 text-green-800">{{ session('sucesso') }}</div>
    @endif
    @if ($errors->any())
      <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
        <ul class="list-disc ml-5">
          @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
        </ul>
      </div>
    @endif
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>
