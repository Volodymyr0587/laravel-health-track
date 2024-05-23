<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchTreatmentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the search input
        $request->validate([
            'searchTreatment' => 'required|string|max:255',
        ]);

        $search = $request->input('searchTreatment');

        // Get the user's diseases and search for treatments within those diseases
        $treatments = auth()->user()->diseases()
            ->with(['treatments' => function($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            }])
            ->get()
            ->pluck('treatments')
            ->flatten();

        return view('treatments.search', compact('treatments', 'search'));
    }
}
