<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes -> setDefaultNameSpace('App\Controllers');
$routes -> setDEfaultController('Home');
$routes -> setDefaultMethod('index');
$routes -> setTranslateURIDashes(false);
$routes -> set404Override();
$routes -> setAutoRoute(true);


// $routes->get('/', 'Home::index');
// $routes->add('/shop', 'Shop::product');
// $routes->get('/shop/adminCheck', 'Shop::adminCheck');

$routes->add('/shop/product/(:any)/(:any)', 'Shop::product/$1/$2');
$routes -> add('blog', function () {
    return "<h2>This is a blog</h2>";
});

$routes -> group('admin', function ($routes) {
    $routes -> add('user', 'Admin\Users::index');
    $routes -> add('users', 'Admin\Users::getAllUsers');
    $routes -> add('product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');

    // Blog routes
    $routes -> add('blog', 'Admin\Blog::index');
    $routes -> get('blog/new', 'Admin\Blog::createNew');
    $routes -> post('blog/new', 'Admin\Blog::saveBlog');
});