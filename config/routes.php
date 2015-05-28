<?php
use Cake\Routing\Router;

Router::plugin('Messenger', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
