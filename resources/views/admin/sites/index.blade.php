@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('css/sites.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Manage Sites</h1>
                <a href="{{ route('admin.sites.create') }}" class="btn-primary">
                    Add New Site
                </a>
            </div>

            <div class="bg-white bg-opacity-10 rounded-lg p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-purple-500">
                            <th class="pb-2 text-left">Name</th>
                            <th class="pb-2 text-left">URL</th>
                            <th class="pb-2 text-left">Owner</th>
                            <th class="pb-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sites as $site)
                        <tr class="border-b border-purple-900">
                            <td class="py-4">{{ $site->name }}</td>
                            <td class="py-4">
                                <a href="{{ $site->url }}" target="_blank" class="text-purple-300 hover:text-purple-100">
                                    {{ $site->url }}
                                </a>
                            </td>
                            <td class="py-4">{{ $site->owner->name }}</td>
                            <td class="py-4 text-right">
                                <a href="{{ route('admin.sites.edit', $site) }}" class="text-yellow-400 hover:text-yellow-200 mr-3">
                                    Edit
                                </a>
                                <form action="{{ route('admin.sites.destroy', $site) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-200"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
