<?php

/**
 * This file contains a number of globally accessible methods that assist with various
 * string manipulation tasks. Inspiration has been taken from Laravel's String helpers,
 * as well as several other similar libraries. These methods have been reproduced here
 * rather than required as a third-party library to reduce overhead and to allow us to
 * pick and choose more specifically those methods we need.
 */

if (! function_exists('str_contains')) {
    /**
     * Check if string contains another string.
     *
     * Case sensitive by default, toggleable in third argument.
     *
     * @param  string  $haystack
     * @param  string  $needle
     * @param  bool    $case_sensitive
     *
     * @return bool
     */
    function str_contains(string $haystack, string $needle, bool $case_sensitive = true) : bool
    {
        if ($case_sensitive === false) {
            $haystack = strtolower($haystack);
            $needle = strtolower($needle);
        }

        return ($needle !== '' && mb_strpos($haystack, $needle) !== false);

    }
}
