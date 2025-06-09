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
        .nav {
            display: flex;
            gap: 1.5rem;
        }
        .nav-link {
            color: var(--text);
            text-decoration: none;
            font-weight: 300;
            padding: 0.5rem 0;
            position: relative;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: var(--primary-light);
            filter: drop-shadow(0 0 8px rgba(154, 92, 255, 0.7));
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--primary-light);
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .footer {
            text-align: center;
            padding: 1.5rem;
            background-color: rgba(15, 15, 27, 0.7);
            border-top: 1px solid rgba(154, 92, 255, 0.2);
            font-size: 0.9rem;
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
            <nav class="nav">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Movies</a>
                <a href="#" class="nav-link">Series</a>
                <a href="#" class="nav-link">My List</a>
            </nav>
        </div>
    </header>

    <!-- Основное содержимое -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Подвал -->
    <footer class="footer">
        <div class="container mx-auto px-4">
            © {{ date('Y') }} My Screen Saga | 
            <a href="#" class="hover:text-purple-200">About</a> | 
            <a href="#" class="hover:text-purple-200">Contact</a>
        </div>
    </footer>
</body>
</html>