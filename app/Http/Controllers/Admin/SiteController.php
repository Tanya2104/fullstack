<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::with('owner')->latest()->get();
        return view('admin.sites.index', compact('sites'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.sites.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'owner_id' => 'required|exists:users,id'
        ]);

        Site::create($validated);

        return redirect()->route('admin.sites.index')
            ->with('success', 'Site created successfully!');
    }

    public function edit(Site $site)
    {
        $users = User::all();
        return view('admin.sites.edit', compact('site', 'users'));
    }

    public function update(Request $request, Site $site)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'owner_id' => 'required|exists:users,id'
        ]);

        $site->update($validated);

        return redirect()->route('admin.sites.index')
            ->with('success', 'Site updated successfully!');
    }

    public function destroy(Site $site)
    {
        $site->delete();
        return redirect()->route('admin.sites.index')
            ->with('success', 'Site deleted successfully!');
    }
}
