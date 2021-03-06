<?php

declare(strict_types=1);

namespace Ehei\StoreBundle\Controller;

use Ehei\StoreBundle\Service\Store;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @param Store $store
     *
     * @return Response
     */
    public function index(Store $store)
    {
        $store->example();
        return new Response('This is the response from Ehei Bundle');
    }
}