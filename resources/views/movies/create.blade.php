@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="bg-gray-900 bg-opacity-60 rounded-xl border border-gray-800 p-6">
        <h1 class="text-2xl font-bold text-purple-300 mb-6">Добавить новый фильм</h1>

        <form action="{{ route('movies.store') }}" method="POST">
            @csrf

            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-gray-400 mb-2">Название фильма</label>
                    <input type="text" id="title" name="title" required
                           class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2 focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                </div>

                <div>
                    <label for="year" class="block text-gray-400 mb-2">Год выпуска</label>
                    <input type="number" id="year" name="year" min="1900" max="{{ date('Y')+1 }}" required
                           class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2 focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                </div>

                <div>
                    <label for="genre" class="block text-gray-400 mb-2">Жанр</label>
                    <input type="text" id="genre" name="genre" required
                           class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2 focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                </div>

                <div>
                    <label for="description" class="block text-gray-400 mb-2">Описание</label>
                    <textarea id="description" name="description" rows="5" required
                              class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-4 py-2 focus:border-purple-500 focus:ring-1 focus:ring-purple-500"></textarea>
                </div>

                <div class="flex justify-end space-x-4 pt-4">
                    <a href="{{ route('movies.index') }}"
                       class="px-6 py-2 border border-gray-700 text-gray-300 rounded-lg hover:bg-gray-800 transition">
                        Отмена
                    </a>
                    <button type="submit"
                            class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-2 rounded-lg hover:opacity-90 transition">
                        Сохранить фильм
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
