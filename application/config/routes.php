<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AuthController';
$route['signup'] = 'AuthController/signup';

$route['dashboard'] = 'HomeController';
$route['dashboard/users'] = 'HomeController/users';
$route['logout'] = 'HomeController/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
