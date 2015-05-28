<?php
use Cake\Routing\Router;

Router::plugin('messenger', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
