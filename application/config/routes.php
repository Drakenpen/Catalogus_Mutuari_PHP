<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['product_items/create'] = 'product_items/create';
$route['product_items/update'] = 'product_items/update';
$route['product_items/(:any)'] = 'product_items/view/$1';

$route['products/create'] = 'products/create';
$route['products/update'] = 'products/update';
$route['products/(:any)'] = 'products/view/$1';
$route['products'] = 'products/index';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['categories/create'] = 'categories/create';
$route['categories/products/(:any)'] = 'categories/products/$1';
$route['categories'] = 'categories/index';

$route['shoppingcart'] = 'shoppingcart/index';

$route['users'] = 'users/index';

$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;