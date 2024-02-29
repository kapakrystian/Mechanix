<?php

declare(strict_types=1);

namespace Mechanix;


class Router
{
    public static function handle(string $method = 'GET', string $path = '/', string $filename = '')
    {
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];
        // echo $currentUri;

        if ($currentMethod != $method) {
            return false;
        }

        $pattern = '#^' . $path . '$siD#';

        if (preg_match($pattern, $currentUri))
        {
            require_once $filename;
            exit();
        } else {
            return false;
        }

    }
}