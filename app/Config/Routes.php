<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
              //url      filename        function name
$routes->get('/main', 'MusicController::index');
$routes->get('/search', 'MusicController::searchsong');
