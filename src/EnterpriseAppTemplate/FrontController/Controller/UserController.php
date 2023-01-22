<?php

declare(strict_types=1);

namespace Nin\EnterpriseAppTemplate\FrontController\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    /**
     * Производим аутентификацию и авторизацию
     *
     * @param Request $request
     * @return Response
     */
    public function authenticationAction(Request $request): Response
    {
        return new Response(__CLASS__ . " stub response");
    }

    /**
     * Выходим из системы
     *
     * @param Request $request
     * @return Response
     */
    public function logoutAction(Request $request): Response
    {
        return new Response(__CLASS__ . " stub response");
    }
}
