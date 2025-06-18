@extends('layouts.app')

@section('content')
<section class="dashboard-section">
    <div class="container">
        <div class="film-perforation top"></div>
        <div class="section-header">
            <h2>
                <span>Личный кабинет</span>
            </h2>
            <p>Добро пожаловать, {{ Auth::user()->name }}!</p>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">0</div>
                <div class="stat-label">Ваших коллекций</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">0</div>
                <div class="stat-label">Просмотренных фильмов</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">0</div>
                <div class="stat-label">Запланировано</div>
            </div>
        </div>
    </div>
</section>
@endsection
