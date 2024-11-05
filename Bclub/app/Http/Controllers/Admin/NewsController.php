<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Display a list of all news items
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    // Display the form for creating news
    public function create()
    {
        return view('admin.news.create');
    }

    // Store a newly created news item in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'nullable|string', // Validate content field
        ]);

        News::create($validated);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    // Display the form for editing the specified news item
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Update the specified news item in the database
    public function update(Request $request, News $news)
    {
        \Log::info('Update request received:', $request->all());

        try {
            $validated = $request->validate([
                'content' => 'required|string',
            ]);

            \Log::info('Updating news with ID: ' . $news->id);
            $news->update($validated);
            \Log::info('News updated successfully.');

            return response()->json(['message' => 'News updated successfully.']);
        } catch (\Exception $e) {
            \Log::error('Update failed: ' . $e->getMessage());
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
