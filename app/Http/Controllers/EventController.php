<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = auth()->user()->events()->paginate(3);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validatedData = $request->validated();

        $event = auth()->user()->events()->create($validatedData);

        if ($request->hasFile('attachment')) {
            $event->addMedia($request->file('attachment'))->toMediaCollection('attachments');
        }

        flash()->success('Your event has been created.');

        return to_route('events.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }


    /**
     * Download attachment file
     */
    public function downloadAttachment(Event $event, Media $media)
    {
        return response()->download($media->getPath(), $media->file_name);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('attachment')) {
            $event->addMedia($request->file('attachment'))->toMediaCollection('attachments');
        }

        $event->update($validatedData);

        flash()->success('Your event has been updated.');

        return to_route('events.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        flash()->flash('warning', 'Your event has been deleted.', [], 'Success');

        return to_route('events.index')->with('message', 'Event deleted successfully');
    }
}
