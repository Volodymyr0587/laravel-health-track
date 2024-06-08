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

        $healthProfile->update($validatedData);

        flash()->success('Your health profile has been updated.');

        return to_route('healthProfile.index');
    }

}
