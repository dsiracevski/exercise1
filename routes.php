<?php


$routes->get('exercise1', 'controllers/index.php');
$routes->get('exercise1/login', 'controllers/login.php');
$routes->get('exercise1/register', 'controllers/register.php');
$routes->post('exercise1/names', 'controllers/new_user.php');