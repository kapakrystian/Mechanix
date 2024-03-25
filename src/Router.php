<?php

declare(strict_types=1);

namespace Mechanix;

use Mechanix\Controllers\HomeController;

class Router
{
    protected array $routes = [];


    public function addRoute(string $uri, string $controller, string $action): void
    {
        $this->routes[$uri] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch(string $uri): void
    {
        if (array_key_exists($uri, $this->routes)) {
            /*----------------------------------------------------------------------------------
            Określenie nazw kontrolera i akcji na podstawie wartości pobranych z tablicy $routes
            -----------------------------------------------------------------------------------*/
            $controllerName = $this->routes[$uri]['controller'] . 'Controller';
            $actionName = $this->routes[$uri]['action'] . 'Action';

            /*---------------------------------------------
            Utworzenie obiektu kontrolera i wywołanie akcji
            ----------------------------------------------*/
            $controllerClass = '\Mechanix\Controllers\\' . $controllerName;
            $controller = new $controllerClass();
            $controller->$actionName();
        } else {
            'Error 404 - trasa nie została znaleziona';
        }
    }
}
