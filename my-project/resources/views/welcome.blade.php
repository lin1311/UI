{{-- resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Подключение стилей/скриптов Laravel UI (Vite) --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container py-5">
    <h1 class="mb-4">Laravel UI</h1>

    @auth
        <a href="{{ route('profile') }}" class="btn btn-primary">Личный кабинет</a>
        <span class="ms-3">Вы вошли как {{ Auth::user()->name ?? Auth::user()->email }}</span>

        <form action="{{ route('logout') }}" method="POST" class="d-inline ms-3">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Выйти</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Войти в личный кабинет</a>
        <a href="{{ route('register') }}" class="btn btn-link">Регистрация</a>
    @endauth>
</body>
</html>