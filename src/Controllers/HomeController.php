<?php

declare(strict_types=1);

namespace Mechanix\Controllers;

use Mechanix\View;

class HomeController extends AbstractController
{
    public function indexAction(): void
    {
        $this->view->render('home');
    }
}
