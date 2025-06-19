@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="bg-gray-900 bg-opacity-60 rounded-xl border border-gray-800 overflow-hidden">
        <div class="p-6">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-purple-300">{{ $movie->title }}</h1>
                    <div class="flex items-center mt-2 space-x-4">
                        <span class="bg-purple-900 text-purple-300 text-sm px-3 py-1 rounded-full">
                            {{ $movie->year }}
                        </span>
                        <span class="bg-gray-800 text-gray-300 text-sm px-3 py-1 rounded-full">
                            {{ $movie->genre }}
                        </span>
                    </div>
                </div>

                @can('update', $movie)
                <div class="flex space-x-2">
                    <a href="{{ route('movies.edit', $movie) }}"
                       class="text-yellow-400 hover:text-yellow-300 p-2 rounded-full hover:bg-gray-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="text-red-400 hover:text-red-300 p-2 rounded-full hover:bg-gray-800"
                                onclick="return confirm('Удалить этот фильм?')">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </form>
                </div>
                @endcan
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-300 mb-4">Описание</h2>
                <p class="text-gray-400 whitespace-pre-line">{{ $movie->description }}</p>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-800">
                <div class="flex items-center text-gray-500 text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Добавлено: {{ $movie->user->name }} • {{ $movie->created_at->format('d.m.Y') }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('movies.index') }}"
           class="inline-flex items-center text-purple-400 hover:text-purple-300">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Вернуться к списку
        </a>
    </div>
</section>
@endsection
