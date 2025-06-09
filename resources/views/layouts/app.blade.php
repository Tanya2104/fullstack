<!DOCTYPE html>
<html lang="en">
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Screen Saga</title>
    <link rel="icon" href="/images/fav.png" sizes="64x64">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0F0F1B;
            color: #E0E7FF;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header-logo {
            transition: all 0.3s;
        }
        .header-logo:hover {
            transform: scale(1.03);
            filter: drop-shadow(0 0 8px rgba(154, 92, 255, 0.7));
        }
    </style>
</head>
<body>
    <!-- Шапка -->
    <header class="py-6 border-b border-purple-900/30">
        <div class="container mx-auto px-4 text-center">
            <img 
                src="/images/logo2.png" 
                alt="My Screen Saga" 
                class="header-logo mx-auto h-16 object-contain"
                height="100"
            >
            <p class="mt-3 text-purple-300 italic font-light">
                Your story begins after the credits
            </p>
        </div>
    </header>

    <!-- Основное содержимое -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Подвал -->
    <footer class="py-4 bg-gray-900/50 text-center text-sm text-purple-300/80">
        <div class="container mx-auto px-4">
            © {{ date('Y') }} My Screen Saga | 
            <a href="#" class="hover:text-purple-200">About</a> | 
            <a href="#" class="hover:text-purple-200">Contact</a>
        </div>
    </footer>
</body>
</html>