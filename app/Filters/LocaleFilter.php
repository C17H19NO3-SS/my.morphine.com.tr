<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class LocaleFilter implements FilterInterface
{
    /**
     * Detects the locale from the first URI segment.
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = $request->getUri();
        $segments = $uri->getSegments();
        $locale = $segments[0] ?? null;

        $supportedLocales = config('App')->supportedLocales;

        if ($locale && in_array($locale, $supportedLocales)) {
            Services::language()->setLocale($locale);
        } else {
            // If No locale segment or invalid, fallback to default
            Services::language()->setLocale(config('App')->defaultLocale);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
