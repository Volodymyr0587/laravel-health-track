<?php

namespace App\Http\Controllers;


class EventsCalendarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $eventsCalendar = [];

        $events = auth()->user()->events()->get();

        foreach ($events as $event) {
            $eventsCalendar[] = [
                'title' => $event->name,
                'start' => $event->event_time,
                'url' => route('events.show', $event),
            ];
        }

        return view('calendar.index', compact('eventsCalendar'));
    }
}
