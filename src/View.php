<?php

declare(strict_types=1);

namespace Mechanix;


class View
{
    public function render(string $viewName, array $params = []): void
    {
        $viewFile = __DIR__ . "/../templates/$viewName.php";
        if (file_exists($viewFile)) {
            include_once __DIR__ . '/../templates/layout.php';
        } else {
            echo 'Error: Plik widoku nie istnieje';
        }
    }
}
