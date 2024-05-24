<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        $numberOfEvents = $user->events()->count();
        $totalEventsPrice = $user->events()->pluck('price')->sum();

        $numberOfTreatments = $user->treatments()->count();
        $totalTreatmentsPrice = $user->treatments()->pluck('price')->sum();

        return view('dashboard.index',
            compact(
                'user',
                'numberOfEvents',
                'totalEventsPrice',
                'numberOfTreatments',
                'totalTreatmentsPrice',
            )
        );
    }
}
