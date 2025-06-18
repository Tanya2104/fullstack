<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Screen Saga</title>
    <link rel="icon" href="/images/fav.png" sizes="64x64">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if(request()->is('login*', 'register*', 'forgot-password*', 'reset-password*'))
        <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="header-container">
            <div class="logo-wrapper">
                <img
                    src="/images/logo3.png"
                    alt="My Screen Saga"
                    class="header-logo glow-effect"
                >
                <span class="site-title">MY SCREEN SAGA</span>
            </div>

           <nav class="nav">

                @auth
                    <!-- Для авторизованных -->
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">Кабинет</a>

                    @can('admin')
                    <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->is('admin*') ? 'active' : '' }}">
                    Админка
                    </a>
                    @endcan

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="nav-link">Выйти</button>
                    </form>
                @else
                    <!-- Для гостей -->
                    <a href="{{ route('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Войти</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link {{ request()->is('register') ? 'active' : '' }}">Регистрация</a>
                    @endif
                @endauth

                <!-- Общие ссылки -->
                <a href="#" class="nav-link">Списки</a>
                <a href="#" class="nav-link">Просмотренные</a>
                <a href="#" class="nav-link">Запланированные</a>
            </nav>
        </div>
    </header>

    <!-- Основное содержимое -->
    <main class="main-content container mx-auto px-4">
        @yield('content')
    </main>

    <!-- Подвал -->
    <footer class="footer">
        <div class="slogan-container">
            <div class="film-perforation top"></div>
            <div class="slogan-text">
                ✦ Your story begins after the credits ✦
            </div>
            <div class="film-perforation bottom"></div>
        </div>

        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>MY SCREEN SAGA</h3>
                    <p class="text-sm opacity-70">
                        Track your cinematic journey through the cosmos of films
                    </p>
                </div>

                <div class="footer-column">
                    <h3>Навигация</h3>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Главная</a>
                        <a href="#" class="footer-link">Мои списки</a>
                        <a href="#" class="footer-link">Просмотренные</a>
                        <a href="#" class="footer-link">Запланированные</a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Контакты</h3>
                    <div class="footer-links">
                        <a href="#" class="footer-link">О нас</a>
                        <a href="#" class="footer-link">Поддержка</a>
                        <a href="#" class="footer-link">API</a>
                        <a href="#" class="footer-link">Правовая информация</a>
                    </div>
                </div>
            </div>

            <div class="copyright">
                © {{ date('Y') }} My Screen Saga. Все права защищены.
            </div>
        </div>
    </footer>
</body>
</html>
