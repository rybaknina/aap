<?php

declare(strict_types=1);

namespace Nin\EnterpriseAppTemplate\FrontController\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    /**
     * Главная страница
     *
     * @return Response
     */

    public function indexAction(): Response
    {
        return new Response(__CLASS__ . " stub response");
    }
}
