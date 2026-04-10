<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static function () {
    return redirect()->to(config('App')->defaultLocale);
});

$routes->group('{locale}', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('sync-repos', 'Home::syncRepos');
});
