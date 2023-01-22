<?php

declare(strict_types=1);

namespace Nin\EnterpriseAppTemplate\FrontController\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController
{
    /**
     * Информация о продукте
     *
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function infoAction(Request $request, string $id): Response
    {
        return new Response(__CLASS__ . " stub response");
    }

    /**
     * Список всех продуктов
     *
     * @param Request $request
     *
     * @return Response
     */
    public function listAction(Request $request): Response
    {
        return new Response(__CLASS__ . " stub response");
    }
}
