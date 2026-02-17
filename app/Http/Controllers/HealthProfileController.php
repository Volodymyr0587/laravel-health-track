<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHealthProfileRequest;
use App\Models\HealthProfile;

class HealthProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healthProfile = auth()->user()->healthProfile;

        return view('health_profile.index', compact('healthProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HealthProfile $healthProfile)
    {
        return view('health_profile.edit', compact('healthProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHealthProfileRequest $request, HealthProfile $healthProfile)
    {
        $validatedData = $request->validated();

        $validatedData['allergies'] = $validatedData['allergies']
            ? array_map('trim', explode(',', $validatedData['allergies']))
            : null;

        $validatedData['chronic_diseases'] = $validatedData['chronic_diseases']
            ? array_map('trim', explode(',', $validatedData['chronic_diseases']))
            : null;

        $validatedData['surgical_interventions'] = $validatedData['surgical_interventions']
            ? array_map('trim', explode(',', $validatedData['surgical_interventions']))
            : null;

        $healthProfile->update($validatedData);

        flash()->success('Your health profile has been updated.');

        return to_route('healthProfile.index');
    }

}
