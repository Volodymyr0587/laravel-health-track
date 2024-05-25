<?php

namespace App\Http\Controllers;

use App\Models\Event;

class AttachmentsController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $events = $user->events()->with('media')->get();

        return view('attachments.index', compact('events'));
    }

    public function destroy(Event $event, $mediaId)
    {
        $media = $event->getMedia('attachments')->find($mediaId);

        if (!$media) {
            abort(404); // Or handle the case where media is not found
        }

        $media->delete();

        flash()->flash('warning', 'Attachment deleted successfully', [], 'Success');

        return redirect()->back();
    }
}
