<?php
// pages
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
// users
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');