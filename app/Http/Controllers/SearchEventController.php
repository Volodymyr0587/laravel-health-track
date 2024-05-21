<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class SearchEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the search input
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $search = $request->input('search');

        $events = auth()->user()->events()
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->orWhere('location', 'LIKE', "%{$search}%");
            })
            ->get();

        return view('events.search', compact('events', 'search'));
    }
}
