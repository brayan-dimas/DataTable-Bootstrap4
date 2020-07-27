<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
// Pages - controller file
// index - method
// blog/create - link
// Blog::create - Controller
$routes->get('/', 'Pages::index');
$routes->get('blog/create', 'Blog::create');
$routes->get('blog/delete/(:any)', 'Blog::delete/$1');
$routes->get('blog/deleteAjax', 'Blog::deleteAjax');



$routes->get('blog/update/(:any)', 'Blog::update/$1');
$routes->get('blog/create/posts', 'Blog::createNewPost');
$routes->get('blog/updatePosts', 'Blog::updatePosts');
$routes->get('blog/updatePostsAjax', 'Blog::updatePostsAjax');
$routes->get('blog/fetchPost', 'Blog::fetchPost');

// $routes->get('blog/createPostsAjax', 'Blog::createPostsAjax');

$routes->get('blog/create/posts', 'UserController::index');
$routes->get('blog/(:any)', 'Blog::post/$1');
$routes->get('(:any)', 'Pages::showme/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
