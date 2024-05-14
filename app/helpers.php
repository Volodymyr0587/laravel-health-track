<?php

if ( !function_exists('count_attachments') ) {
    function count_attachments() {
        $userAttachmentsCount = 0;
        $user = auth()->user();

        if ($user) {
            $events = $user->events()->get();

            foreach ($events as $event) {
                $mediaCount = $event->getMedia('attachments')->count();
                if ($mediaCount > 0) {
                    $userAttachmentsCount += $mediaCount;
                }
            }
        }

        return $userAttachmentsCount;
    }
}

if (!function_exists('count_events')) {
    function count_events() {
        $user = auth()->user();

        if ($user) {
            return $user->events()->count();
        }

    }
}
