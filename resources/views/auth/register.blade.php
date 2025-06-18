@extends('layouts.app')

@section('content')
<div class="auth-card">
    <h1 class="auth-title">Регистрация</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <input id="name" type="text" name="name" class="auth-input"
                   placeholder="Имя" required autofocus>
        </div>

        <div>
            <input id="email" type="email" name="email" class="auth-input"
                   placeholder="Email" required>
        </div>

        <div>
            <input id="password" type="password" name="password"
                   class="auth-input" placeholder="Пароль" required>
        </div>

        <div>
            <input id="password_confirmation" type="password"
                   name="password_confirmation" class="auth-input"
                   placeholder="Подтвердите пароль" required>
        </div>

        <button type="submit" class="auth-button">
            Зарегистрироваться
        </button>

        <div class="auth-links">
            Уже есть аккаунт?
            <a href="{{ route('login') }}" class="auth-link">Войти</a>
        </div>
    </form>
</div>
@endsection
