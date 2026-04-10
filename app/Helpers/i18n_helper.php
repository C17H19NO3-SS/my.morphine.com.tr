<?php

if (!function_exists('__t')) {
    /**
     * Translates a string using JSON files based on current locale.
     * 
     * @param string $key 
     * @param string|null $default
     * @return string
     */
    function __t(string $key, ?string $default = null): string
    {
        static $translations = [];
        $locale = service('language')->getLocale();

        if (!isset($translations[$locale])) {
            $path = APPPATH . "Language/{$locale}.json";
            if (file_exists($path)) {
                $translations[$locale] = json_decode(file_get_contents($path), true) ?? [];
            } else {
                $translations[$locale] = [];
            }
        }

        // Support dot notation
        $result = $translations[$locale];
        foreach (explode('.', $key) as $segment) {
            if (isset($result[$segment])) {
                $result = $result[$segment];
            } else {
                return $default ?? $key;
            }
        }

        return is_string($result) ? $result : ($default ?? $key);
    }
}
