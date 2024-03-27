<?php

declare(strict_types=1);

namespace Mechanix;

require_once 'vendor/autoload.php';
$configuration = require_once 'config/config.php';

use Mechanix\Controllers\AbstractController;
use Mechanix\Exceptions\StorageException;
use Mechanix\Router;


try {
    AbstractController::initConfiguration($configuration);
} catch (StorageException $e) {
    echo 'Problem z aplikacją, proszę spróbować za chwilę.';
}

$router = new Router();
$router->addRoute('/home', 'Home', 'index');
$router->addRoute('/clientList', 'Client', 'list');
$router->addRoute('/addClient', 'Client', 'add');
$router->addRoute('/serviceList', 'Service', 'list');
$router->addRoute('/addService', 'Service', 'add');
$router->addRoute('/repairList', 'Repair', 'list');
$router->addRoute('/addRepair', 'Repair', 'add');
$router->addRoute('/payments', 'Payments', 'manage');
$router->addRoute('/generator', 'Generator', 'generate');
$router->addRoute('/myProfile', 'Profile', 'myProfile');
$router->addRoute('/logs', 'Logs', 'logs');

$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($uri);
