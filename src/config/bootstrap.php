<?php
declare(strict_types=1);

use DGDB\ServiceProvider\DependencyProvider;
use DGDB\ServiceProvider\AppProvider;
use DGDB\ServiceProvider\MonologProvider;
use Slim\Container;

require_once __DIR__ . '/../../vendor/autoload.php';

define('APP_ROOT', __DIR__ . '/../../');

$container = new Container(require __DIR__ . '/settings.php');

// register service providers
$container
    ->register(new DependencyProvider())
    ->register(new AppProvider())
    ->register(new MonologProvider());

return $container;