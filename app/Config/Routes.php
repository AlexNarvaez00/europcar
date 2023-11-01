<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource("/europcar", ["controller" => "Europcar\EuropcarController"]);
$routes->post("/europcar/(:num)",'Europcar\EuropcarController::getByStationId/$1');
