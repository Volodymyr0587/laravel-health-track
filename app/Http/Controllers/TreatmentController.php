<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Treatment;
use App\Http\Requests\StoreTreatmentRequest;
use App\Http\Requests\UpdateTreatmentRequest;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatments = Treatment::orderBy('created_at')->whereHas('disease', function ($query) {
            $query->where('user_id', auth()->id());
        })->paginate(3);



        return view('treatments.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        // Отримати список захворювань для поточного користувача
        $diseases = $user->diseases()->pluck('name', 'id');
        return view('treatments.create', compact('diseases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request)
    {
        $validatedData = $request->validated();

        $treatment = Treatment::create($validatedData);

        flash()->success('Your treatment has been created.');

        return to_route('treatments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Treatment $treatment)
    {
        return view('treatments.show', compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Treatment $treatment)
    {
        $user = auth()->user();
        // Отримати список захворювань для поточного користувача
        $diseases = $user->diseases()->pluck('name', 'id');

        return view('treatments.edit', compact('treatment', 'diseases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreatmentRequest $request, Treatment $treatment)
    {
        $validatedData = $request->validated();

        $treatment->update($validatedData);

        flash()->success('Your treatment has been updated.');

        return to_route('treatments.show', $treatment->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        $treatment->delete();

        flash()->flash('warning', 'Your treatment has been deleted.', [], 'Success');

        return to_route('treatments.index');
    }
}
