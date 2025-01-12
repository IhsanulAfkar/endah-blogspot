<?php
if (!function_exists('format_date')) {
    /**
     * Format a given date to a specific format.
     *
     * @param  string  $date
     * @param  string  $format
     * @return string
     */
    function format_date($date)
    {
        return \Carbon\Carbon::parse($date)->locale('id')
        ->isoFormat('dddd, MMMM DD YYYY');
    }
}