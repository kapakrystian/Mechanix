<?php

declare(strict_types=1);

namespace Mechanix\Controllers;

use Mechanix\Models\ClientModel;
use Mechanix\View;

abstract class AbstractController
{
    static private array $configuration = [];

    protected ClientModel $clientModel;
    protected View $view;

    static public function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

    public function __construct()
    {
        // var_dump(self::$configuration['db']);
        $this->clientModel = new ClientModel(self::$configuration["db"]);
        $this->view = new View();
    }
}
