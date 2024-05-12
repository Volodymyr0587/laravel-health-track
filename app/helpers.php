<?php

if (! function_exists('count_files')) {
    function count_files($path) {
        return count(Illuminate\Support\Facades\Storage::allFiles($path));
    }
}
