<?php

use App\Router\Router;

$defaultView = "ViewController@defaultView";

Router::get('/login', 'Auth\LoginController@form');
Router::get('/register', 'Auth\RegisterController@form');
Router::post('/register', "Auth\RegisterController@register");
Router::post('/login', "Auth\LoginController@login");

Router::get('/', 'HomeController@homePage');
Router::get('/admin/users', 'Admin\UserController@index');
