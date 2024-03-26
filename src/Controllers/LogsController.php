<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class LogsController extends AbstractController
{
    public function logsAction(): void
    {
        $this->view->render('logs');
    }
}
