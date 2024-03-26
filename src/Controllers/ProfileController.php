<?php

declare(strict_types=1);

namespace Mechanix\Controllers;


class ProfileController extends AbstractController
{
    public function myProfileAction(): void
    {
        $this->view->render('myProfile');
    }
}
