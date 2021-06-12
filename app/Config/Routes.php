<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('chap', 'Home::indexCopy');
$routes->get('hse', 'Home::hse');
$routes->get('quality-assurance', 'Home::qassure');
$routes->get('corporate-policy', 'Home::coportatePolicy');
$routes->match(['get', 'post'], 'create', 'Home::create');
$routes->get('services','Home::services');
$routes->get('service/(:any)','Home::service/$1');
$routes->get('about', 'Home::about');
$routes->get('contact', 'ContactController::index');
$routes->post('contact', 'ContactController::sendContact');
$routes->get('our-mission', 'Home::ourMission');
$routes->get('our-vision', 'Home::ourVision');
$routes->get('email', 'EmailController::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
