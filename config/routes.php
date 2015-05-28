<?php
use Cake\Routing\Router;

Router::plugin('Cakephp-messenger', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
