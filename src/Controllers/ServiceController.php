<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class ServiceController extends AbstractController
{
    public function listAction(): void
    {
        $this->view->render('serviceList');
    }

    public function addAction(): void
    {
        $this->view->render('addService');
    }
}
