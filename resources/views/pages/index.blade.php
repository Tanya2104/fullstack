@extends('layouts.app')

@section('content')
<!-- Статистика -->
<section class="stats-section mb-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="stat-card">
            <div class="text-purple-300 mb-2">Всего в коллекции</div>
            <div class="text-4xl font-orbitron text-purple-400">127</div>
        </div>
        
        <div class="stat-card">
            <div class="text-purple-300 mb-2">Просмотрено</div>
            <div class="text-4xl font-orbitron text-purple-400">84</div>
        </div>
        
        <div class="stat-card">
            <div class="text-purple-300 mb-2">В планах</div>
            <div class="text-4xl font-orbitron text-purple-400">43</div>
        </div>
    </div>
</section>

<!-- Сейчас смотрят -->
<section class="mb-16">
    <h2 class="section-title">
        <span class="text-purple-400">Сейчас смотрят</span>
        <span class="divider-line"></span>
    </h2>
    
    <div class="movie-scroll-container">
        <div class="scroll-content">
            @for($i = 1; $i <= 8; $i++)
            <div class="movie-card">
                <div class="movie-poster">
                    Постер {{$i}}
                </div>
                <div class="movie-info">
                    <h3 class="font-semibold truncate">Название фильма {{$i}}</h3>
                    <div class="movie-rating">
                        <span class="text-yellow-400 text-sm">★★★★☆</span>
                        <span class="movie-status">Смотрю</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Рекомендации -->
<section class="mb-16">
    <h2 class="section-title">
        <span class="text-purple-400">Для вас</span>
        <span class="divider-line"></span>
    </h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
        @for($i = 1; $i <= 5; $i++)
        <div class="movie-card">
            <div class="movie-poster">
                Рекомендация {{$i}}
            </div>
            <div class="movie-info">
                <h3 class="font-semibold truncate">Фильм из вашей коллекции</h3>
                <div class="movie-rating">
                    <span class="text-yellow-400 text-sm">★★★★☆</span>
                    <span class="movie-status">Похожий</span>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>

<!-- Ваши списки -->
<section class="mb-8">
    <h2 class="section-title">
        <span class="text-purple-400">Ваши списки</span>
        <span class="divider-line"></span>
    </h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="#" class="list-card">
            <div class="flex items-center mb-4">
                <div class="list-icon">
                    <span class="text-purple-300">★</span>
                </div>
                <h3 class="text-lg font-medium">Избранное</h3>
            </div>
            <p class="text-sm text-purple-300/70">23 фильма</p>
        </a>
        
        <a href="#" class="list-card">
            <div class="flex items-center mb-4">
                <div class="list-icon">
                    <span class="text-purple-300">🌙</span>
                </div>
                <h3 class="text-lg font-medium">Для вечера</h3>
            </div>
            <p class="text-sm text-purple-300/70">15 фильмов</p>
        </a>
        
        <a href="#" class="list-card">
            <div class="flex items-center mb-4">
                <div class="list-icon">
                    <span class="text-purple-300">🎞️</span>
                </div>
                <h3 class="text-lg font-medium">Классика</h3>
            </div>
            <p class="text-sm text-purple-300/70">37 фильмов</p>
        </a>
        
        <a href="#" class="list-card">
            <div class="flex items-center mb-4">
                <div class="list-icon">
                    <span class="text-purple-300">🆕</span>
                </div>
                <h3 class="text-lg font-medium">Новые</h3>
            </div>
            <p class="text-sm text-purple-300/70">8 фильмов</p>
        </a>
    </div>
</section>
@endsection