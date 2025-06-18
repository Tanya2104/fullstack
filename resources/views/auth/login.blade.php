@extends('layouts.app')

@section('content')
<div class="auth-card">
    <h1 class="auth-title">Вход в аккаунт</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <input id="email" type="email" name="email" class="auth-input"
                   placeholder="Email" required autofocus>
        </div>

        <div>
            <input id="password" type="password" name="password"
                   class="auth-input" placeholder="Пароль" required>
        </div>

        <div class="flex items-center mb-4">
            <input id="remember" type="checkbox" name="remember" class="mr-2">
            <label for="remember">Запомнить меня</label>
        </div>

        <button type="submit" class="auth-button">
            Войти
        </button>

        <div class="auth-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="auth-link">
                    Забыли пароль?
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
