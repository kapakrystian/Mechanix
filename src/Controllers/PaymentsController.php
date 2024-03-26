<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class PaymentsController extends AbstractController
{
    public function manageAction(): void
    {
        $this->view->render('payments');
    }
}
