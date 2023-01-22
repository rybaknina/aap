<?php

declare(strict_types=1);

namespace Nin\EnterpriseAppTemplate\FrontController\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController
{
    /**
     * Корзина
     *
     * @param Request $request
     * @return Response
     */
    public function infoAction(Request $request): Response
    {
        return new Response(__CLASS__ . " stub response");
    }

    /**
     * Оформление заказа
     *
     * @param Request $request
     * @return Response
     */
    public function checkoutAction(Request $request): Response
    {
        return new Response(__CLASS__ . " stub response");
    }
}
