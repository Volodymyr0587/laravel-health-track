<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchNoteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the search input
        $request->validate([
            'searchNote' => 'required|string|max:255',
        ]);

        $search = $request->input('searchNote');

        $notes = auth()->user()->notes()
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('body', 'LIKE', "%{$search}%");
            })
            ->get();

        return view('notes.search', compact('notes', 'search'));
    }
}
