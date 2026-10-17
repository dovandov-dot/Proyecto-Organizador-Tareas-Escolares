<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('registro', 'Home::Registro');
$routes->get('IniciarSesion', 'Home::IniciarSesion');
