<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class GeneratorController extends AbstractController
{
    public function generateAction(): void
    {
        $this->view->render('generator');
    }
}
