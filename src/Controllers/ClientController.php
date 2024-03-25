<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class ClientController extends AbstractController
{
    public function listAction(): void
    {
        $this->view->render('clientList');
    }

    public function addAction(): void
    {
        $this->view->render('addClient');
    }
}
