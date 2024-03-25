<?php

declare(strict_types=1);

namespace Mechanix;

require_once 'vendor/autoload.php';

use Mechanix\Router;

$router = new Router();
$router->addRoute('/home', 'Home', 'index');
$router->addRoute('/clientList', 'Client', 'list');
$router->addRoute('/addClient', 'Client', 'add');
$router->addRoute('/serviceList', 'Service', 'list');
$router->addRoute('/addService', 'Service', 'add');
$router->addRoute('/repairList', 'Repair', 'list');
$router->addRoute('/addRepair', 'Repair', 'add');

$uri = $_SERVER['REQUEST_URI'];
$router->dispatch($uri);
