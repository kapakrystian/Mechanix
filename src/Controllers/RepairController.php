<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class RepairController extends AbstractController
{
    public function listAction(): void
    {
        $this->view->render('repairList');
    }

    public function addAction(): void
    {
        $this->view->render('addRepair');
    }
}
