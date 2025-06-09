<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Screen Saga</title>
    <link rel="icon" href="/images/fav.png" sizes="64x64">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="header-container">
            <div class="logo-wrapper">
                <img 
                    src="/images/logo2.png" 
                    alt="My Screen Saga" 
                    class="header-logo glow-effect"
                >
                <span class="site-title">MY SCREEN SAGA</span>
            </div>
            
            <nav class="nav">
                <a href="#" class="nav-link active">Главная</a>
                <a href="#" class="nav-link">Мой список</a>
                <a href="#" class="nav-link">Просмотренные</a>
                <a href="#" class="nav-link">Запланированные</a>
                <a href="#" class="nav-link">Профиль</a>
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
                        <a href="#" class="footer-link">Мой список</a>
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