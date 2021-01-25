<?php

$router->get('practiotioner21/index.php', 'PagesController@home');
$router->get('practiotioner21/about', 'PagesController@about');
$router->get('practiotioner21/culture', 'PagesController@culture');
$router->get('practiotioner21/contact', 'PagesController@contact');
$router->post('practiotioner21/names', 'controllers/add_name.php');
$router->get('practiotioner21/users', 'UsersController@index');
$router->post('practiotioner21/users', 'UsersController@store');
