<?php
session_start();
require __DIR__.'./vendor/autoload.php';

use App\Router\Router;
/**
 * Boot application routes
 */
if (isXhr())
    require './routes/api.php';
else
    require './routes/web.php';

Router::checkRoute();

