<?php

declare(strict_types=1);

namespace Mechanix\Controllers;

use Mechanix\View;

abstract class AbstractController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
