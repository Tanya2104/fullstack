@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
                Моя кинотека
            </h1>
            <p class="text-gray-400 mt-2">Ваша персональная коллекция фильмов</p>
        </div>
        <a href="{{ route('movies.create') }}"
           class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-2 rounded-lg hover:opacity-90 transition">
            + Добавить фильм
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-900 bg-opacity-50 text-green-300 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($movies as $movie)
        <div class="bg-gray-900 bg-opacity-60 rounded-xl overflow-hidden border border-gray-800 hover:border-purple-500 transition">
            <div class="p-6">
                <div class="flex justify-between items-start">
                    <h2 class="text-xl font-bold text-purple-300">{{ $movie->title }}</h2>
                    <span class="bg-purple-900 text-purple-300 text-xs px-2 py-1 rounded">
                        {{ $movie->year }}
                    </span>
                </div>

                <span class="inline-block mt-2 text-sm bg-gray-800 text-gray-300 px-2 py-1 rounded">
                    {{ $movie->genre }}
                </span>

                <p class="mt-4 text-gray-300 line-clamp-3">{{ $movie->description }}</p>

                <div class="mt-6 flex justify-between items-center">
                    <a href="{{ route('movies.show', $movie) }}"
                       class="text-purple-400 hover:text-purple-300 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        Подробнее
                    </a>

                    @can('update', $movie)
                    <div class="flex space-x-3">
                        <a href="{{ route('movies.edit', $movie) }}"
                           class="text-yellow-400 hover:text-yellow-300 text-sm flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Ред.
                        </a>
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-400 hover:text-red-300 text-sm flex items-center"
                                    onclick="return confirm('Удалить этот фильм?')">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Удалить
                            </button>
                        </form>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-3 py-12 text-center">
            <div class="text-gray-500 mb-4">
                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                </svg>
            </div>
            <h3 class="text-xl text-gray-400">Ваша кинотека пуста</h3>
            <p class="text-gray-600 mt-2">Добавьте первый фильм в свою коллекцию</p>
            <a href="{{ route('movies.create') }}" class="inline-block mt-4 text-purple-400 hover:text-purple-300">
                + Создать запись о фильме
            </a>
        </div>
        @endforelse
    </div>
</section>
@endsection
