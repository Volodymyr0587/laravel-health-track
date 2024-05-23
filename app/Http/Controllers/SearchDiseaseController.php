<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDiseaseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the search input
        $request->validate([
            'searchDisease' => 'required|string|max:255',
        ]);

        $search = $request->input('searchDisease');

        $diseases = auth()->user()->diseases()
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            })
            ->get();

        return view('diseases.search', compact('diseases', 'search'));
    }
}
