<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login',['filter'=>'noauth']);
$routes->match(['get','post'],'signup','Home::signup',['filter'=>'noauth']);
$routes->get('dashboard', 'Home::dashboard',['filter'=>'auth']);
