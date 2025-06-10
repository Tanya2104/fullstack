@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Раздел со статистикой -->
        <section class="stats-section">
            <div class="container">
                <div class="film-perforation top"></div>
                <div class="section-header">
                    <h2>
                        <span>Ваша киностатистика</span>
                    </h2>
                    <p>Отслеживайте ваш прогресс в мире кино</p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-target="1254">0</div>
                        <div class="stat-label">Всего в коллекции</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="327">0</div>
                        <div class="stat-label">Просмотренно</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="24">0</div>
                        <div class="stat-label">В планах</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел с описанием -->
        <section class="section-2">
            <div class="container">
                <div>
                    <div class="film-perforation top"></div>
                    <div class="section-header">
                        <h2>
                            <span>Добро пожаловать в вашу киновселенную</span>
                        </h2>
                    </div>
                    
                    <div class="text-content">
                        <div class="highlight-box">
                            <p>
                                <span class="text">My Screen Saga</span> — это персональный гид по вашим кинопутешествиям. 
                                Здесь каждая оценка, каждый просмотренный фильм и сериал становятся частью уникальной истории.
                            </p>
                        
                            <div class="text-2">
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
                                    <span>✦</span>
                                    <p class="text-gray-300"><?= $feature ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="text-center">
                            <p class="text-xl">
                                "Кино — это жизнь, из которой вырезали всё скучное"
                            </p>
                            <p class="text-sm">— Альфред Хичкок</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Раздел с рекомендациями -->
        <section class="section-3">
            <div class="container">
                <div class="film-perforation top"></div>
                <div class="section-header">
                    <h2>
                        <span>Персональные рекомендации</span>
                    </h2>
                    <p>Фильмы и сериалы, подобранные специально для вас</p>
                </div>
                
                <div class="cards-scroll-container">
                    <div class="cards-wrapper">
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <div class="card">
                                <div class="card-image" style="background-image: url('https://picsum.photos/300/200?random=<?= $i ?>');"></div>
                                <div class="card-content">
                                    <h3 class="text-xl">Рекомендация <?= $i ?></h3>
                                    <p class="text-gray-400 text-sm mb-4">Описание рекомендации номер <?= $i ?> с интересным содержанием.</p>
                                    <a href="#" class="card-button">
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
        <section class="section-3">
            <div class="container">
                <div class="film-perforation top"></div>
                <div class="section-header">
                    <h2>
                        <span>Ваши киносписки</span>
                    </h2>
                    <p>Организуйте свои фильмы и сериалы в персонализированные коллекции</p>
                </div>
                
                <div class="features-grid">
                    <?php 
                    $lists = [
                        ['icon' => '💖', 'title' => 'Избранное', 'text' => 'Что запало вам прямо в душу'],
                        ['icon' => '🌙', 'title' => 'На вечер', 'text' => 'Как провести незабываемый вечер'],
                        ['icon' => '🎞️', 'title' => 'Классика', 'text' => 'Незабываемая классика'],
                        ['icon' => '💎', 'title' => 'Новинки', 'text' => 'Если хочется посмотреть что-то новое'],
                    ];
                    
                    foreach ($lists as $list): ?>
                        <div class="feature-card">
                            <div class="feature-icon"><?= $list['icon'] ?></div>
                            <h3 class="text-xl"><?= $list['title'] ?></h3>
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