<?php

if (! function_exists('count_user_attachment')) {
    function count_user_attachment() {
        return auth()->user()?->events()->whereNotNull('attachment')->count() ?? '';
    }
}
