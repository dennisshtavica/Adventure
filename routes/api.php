<?php

use App\Router\Router;


Router::post('/api/login', "Auth\LoginController@login");
Router::post('/api/register', "Auth\RegisterController@register");
