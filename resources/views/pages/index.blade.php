@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Раздел со статистикой -->
        <section class="stats-section">
            <div class="container mx-auto px-4">
                <div class="section-header">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Ваша киностатистика</span>
                    </h2>
                    <p class="max-w-2xl mx-auto text-purple-200">Отслеживайте ваш прогресс в мире кино</p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item transform transition-all duration-300 hover:scale-105">
                        <div class="stat-number glow-effect" data-target="1254">0</div>
                        <div class="stat-label">Всего в коллекции</div>
                    </div>
                    <div class="stat-item transform transition-all duration-300 hover:scale-105">
                        <div class="stat-number glow-effect" data-target="327">0</div>
                        <div class="stat-label">Просмотренно</div>
                    </div>
                    <div class="stat-item transform transition-all duration-300 hover:scale-105">
                        <div class="stat-number glow-effect" data-target="24">0</div>
                        <div class="stat-label">В планах</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел с описанием -->
        <section class="py-16 bg-gradient-to-b from-gray-900 to-gray-800">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-gray-800/50 border border-purple-900/30 rounded-xl p-8 backdrop-blur-sm transition-all duration-500 hover:border-purple-900/50 hover:shadow-lg hover:shadow-purple-900/10">
                    <div class="section-header mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 relative">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Добро пожаловать в вашу киновселенную</span>
                        </h2>
                    </div>
                    
                    <div class="text-content text-gray-300">
                        <div class="highlight-box bg-purple-900/10 border-l-4 border-purple-400 rounded-r-lg p-6 mb-8">
                            <p class="text-xl leading-relaxed text-purple-300 font-medium mb-4">
                                <span class="text-purple-400 font-bold">My Screen Saga</span> — это персональный гид по вашим кинопутешествиям. 
                                Здесь каждая оценка, каждый просмотренный фильм и сериал становятся частью уникальной истории.
                            </p>
                        
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php 
                                $features = [
                                    'Создавайте коллекции, отмечайте просмотренное и открывайте для себя новые грани киноискусства',
                                    'Персонализированные рекомендации на основе ваших предпочтений',
                                    'Анализируйте свои просмотры с детальной статистикой',
                                    'Делитесь своими списками с друзьями-киноманами'
                                ];
                                ?>
                                <?php foreach ($features as $feature): ?>
                                <div class="flex items-start">
                                    <span class="text-purple-400 mr-3 mt-1 animate-pulse">✦</span>
                                    <p class="text-gray-300"><?= $feature ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="text-center italic text-purple-300/80 mt-8 border-t border-purple-900/30 pt-8">
                            <p class="text-xl">
                                "Кино — это жизнь, из которой вырезали всё скучное"
                            </p>
                            <p class="text-sm mt-2">— Альфред Хичкок</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел с рекомендациями -->
        <section class="py-16 bg-gray-800">
            <div class="container mx-auto px-4">
                <div class="section-header mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Персональные рекомендации</span>
                    </h2>
                    <p class="max-w-2xl mx-auto text-purple-200">Фильмы и сериалы, подобранные специально для вас</p>
                </div>
                
                <div class="cards-scroll-container">
                    <div class="cards-wrapper">
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <div class="card bg-gray-700 border border-gray-600 rounded-lg overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg hover:shadow-purple-900/20">
                                <div class="card-image h-48 bg-cover bg-center" style="background-image: url('https://picsum.photos/300/200?random=<?= $i ?>');"></div>
                                <div class="card-content p-4">
                                    <h3 class="text-xl font-semibold text-white mb-2">Рекомендация <?= $i ?></h3>
                                    <p class="text-gray-400 text-sm mb-4">Описание рекомендации номер <?= $i ?> с интересным содержанием.</p>
                                    <a href="#" class="card-button bg-gradient-to-r from-purple-600 to-pink-600 rounded-md px-4 py-2 text-sm font-medium transition-all duration-300 hover:from-purple-700 hover:to-pink-700 hover:shadow-md hover:shadow-purple-900/30">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел со списками -->
        <section class="py-16 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="section-header mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Ваши киносписки</span>
                    </h2>
                    <p class="max-w-2xl mx-auto text-purple-200">Организуйте свои фильмы и сериалы в персонализированные коллекции</p>
                </div>
                
                <div class="features-grid">
                    <?php 
                    $lists = [
                        ['icon' => '★', 'title' => 'Избранное', 'text' => 'Что запало вам прямо в душу'],
                        ['icon' => '🌙', 'title' => 'На вечер', 'text' => 'Как провести незабываемый вечер'],
                        ['icon' => '🎞️', 'title' => 'Классика', 'text' => 'Незабываемая классика'],
                        ['icon' => '🆕', 'title' => 'Новинки', 'text' => 'Если хочется посмотреть что-то новое'],
                    ];
                    
                    foreach ($lists as $list): ?>
                        <div class="feature-card bg-gray-800 border border-gray-700 rounded-xl p-6 text-center transition-all duration-300 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-900/10 hover:-translate-y-2">
                            <div class="feature-icon text-5xl mb-4 text-purple-400"><?= $list['icon'] ?></div>
                            <h3 class="text-xl font-semibold text-white mb-2"><?= $list['title'] ?></h3>
                            <p class="text-gray-400"><?= $list['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <script>
            // Анимация чисел статистики
            document.addEventListener('DOMContentLoaded', function() {
                const statNumbers = document.querySelectorAll('.stat-number');
                
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.getAttribute('data-target'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const updateNumber = () => {
                        current += step;
                        if (current < target) {
                            stat.textContent = Math.floor(current);
                            requestAnimationFrame(updateNumber);
                        } else {
                            stat.textContent = target;
                        }
                    };
                    
                    setTimeout(updateNumber, 500);
                });
            });
        </script>
    </body>
@endsection