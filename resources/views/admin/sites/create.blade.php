@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('css/sites.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-6">Create New Site</h1>

            <form action="{{ route('admin.sites.store') }}" method="POST" class="max-w-lg bg-white bg-opacity-10 rounded-lg p-6">
                @csrf

                <div class="mb-4">
                    <label class="block mb-2">Name</label>
                    <input type="text" name="name" required class="w-full bg-gray-800 bg-opacity-50 rounded border border-gray-700 text-white p-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">URL</label>
                    <input type="url" name="url" required class="w-full bg-gray-800 bg-opacity-50 rounded border border-gray-700 text-white p-2">
                </div>

                <div class="mb-6">
                    <label class="block mb-2">Owner</label>
                    <select name="owner_id" required class="w-full bg-gray-800 bg-opacity-50 rounded border border-gray-700 text-white p-2">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn-primary">
                        Create Site
                    </button>
                </div>
            </form>
        </div>
    </body>
@endsection
