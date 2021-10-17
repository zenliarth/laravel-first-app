<!DOCTYPE html class="w-full">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css">

  <title>@yield('title')</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="/js/script.js"></script>
</head>

<body class="w-full h-full">
  <div class="flex w-full h-20">
    <Header class="flex w-full h-full bg-gray-900">
      <nav class="flex w-full h-full">
        <div class="w-full h-full flex items-center justify-between mx-12">
          <a href="/">
            <img class="w-12 h-12" src="/img/laravel.svg" alt="banner">
          </a>
          <ul class='flex gap-x-4 items-center'>
            <li>
              <a href="/">Eventos</a>
            </li>
            <li>
              <a href="/events/create">Criar Eventos</a>
            </li>
            @auth
            <li>
              <a href="/dashboard">Meus Eventos</a>
            </li>
            <li class="flex pt-4">
              <form action="/logout" method="POST">
                @csrf
                <a href="/logout" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
              </form>
            </li>
            @endauth
            @guest
            <li>
              <a href="/login">Entrar</a>
            </li>
            <li>
              <a href="/register">Cadastrar</a>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
    </Header>
  </div>
  <main class="w-full">
    <div>
      @if(session('msg'))
      <p class="w-full bg-green-400 text-green-900 p-4 text-center">{{ session('msg') }}</p>
      @endif
    </div>
    @yield('content')
  </main>
  <footer class="w-full h-26 bg-gray-900 p-4 text-red-600 text-center pt-4">
    <p>Events &copy; 2021</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>