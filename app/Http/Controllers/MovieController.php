<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('user')->latest()->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|min:1900|max:'.(date('Y')+5),
            'genre' => 'required|string|max:100'
        ]);

        $request->user()->movies()->create($validated);

        return redirect()->route('movies.index');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $this->authorize('update', $movie);
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $this->authorize('update', $movie);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer|min:1900',
            'genre' => 'required|string|max:100'
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie)
    {
        $this->authorize('delete', $movie);
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
