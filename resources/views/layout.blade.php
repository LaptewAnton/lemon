<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/jquery-3.5.1.min.js" defer></script>
    <script src="/js/bootstrap.bundle.min.js" defer></script>
    <script src="/js/main.js" defer></script>

    <script>
        window.onload = function () {
            document.body.classList.add('loaded');
        }
    </script>

</head>
<body>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<div class="wrapper">
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">@yield('title')</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="{{route('home')}}">Главная</a>
            <a class="p-2 text-dark" href="{{route('admin')}}">Админка</a>
            <a class="p-2 text-dark" href="{{route('recipes')}}">Рецепты</a>
        </nav>
        <a class="btn btn-outline-primary disabled" href="#">Войти</a>
    </header>
    <main class="container content">
        @yield('content')
    </main>
    <br>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Вернутся наверх</a>
            </p>
            <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                    href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
</div>
</body>
</html>
