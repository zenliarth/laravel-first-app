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

<body class="w-full h-full bg-gray-700">
  <div class="flex w-screen bg-gray-900 p-2">
    <Header class="flex w-full">
      <nav class="flex w-full">
        <div class="w-full flex items-center justify-between p-2">
          <a href="/">
            <img class="w-16 h-16" src="/img/laravel.svg" alt="banner">
          </a>
          <ul class='flex gap-x-4'>
            <li>
              <a href="/">Eventos</a>
            </li>
            <li>
              <a href="/events/create">Criar Eventos</a>
            </li>
            <li>
              <a href="/login">Entrar</a>
            </li>
            <li>
              <a href="/login">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </Header>
  </div>
  @yield('content')
  <footer class="w-full bg-gray-900 p-4 text-gray-200 fixed bottom-0 text-center">
    <h1>Footer</h1>
    <p>Zen Events &copy; 2021</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>