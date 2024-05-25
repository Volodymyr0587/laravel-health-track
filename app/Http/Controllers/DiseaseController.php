<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiseaseRequest;
use App\Http\Requests\UpdateDiseaseRequest;
use App\Models\Disease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = auth()->user()->diseases()->paginate(3);
        return view('diseases.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseRequest $request)
    {
        $validatedData = $request->validated();

        $disease = auth()->user()->diseases()->create($validatedData);

        flash()->success('Disease added successfully');

        return to_route('diseases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        return view('diseases.show', compact('disease'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        return view('diseases.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseRequest $request, Disease $disease)
    {
        $validatedData = $request->validated();

        $disease->update($validatedData);

        flash()->success('Disease updated successfully');

        return to_route('diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $disease)
    {
        $disease->delete();

        flash()->flash('warning', 'Disease deleted successfully', [], 'Success');

        return to_route('diseases.index');
    }
}
