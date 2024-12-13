<?php
declare(strict_types=1);
error_reporting(E_ERROR);

use Slim\App;
use Slim\Container;

/** @var Container $container */
$container = require_once __DIR__ . '/src/config/bootstrap.php';

/** @var App $app */
$app = $container[App::class];
$app->run();